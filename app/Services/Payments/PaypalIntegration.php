<?php

namespace App\Services\Payments;

use App\Interfaces\PaymentIntegrationInterface;
use Illuminate\Config\Repository as Config;
use PayPal\Api\Amount;
use PayPal\Api\CreditCard;
use PayPal\Api\CreditCardToken;
use PayPal\Api\Details;
use PayPal\Api\ExecutePayment;
use PayPal\Api\FundingInstrument;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;	
use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Exception\PayPalConnectionException;
use PayPal\Rest\ApiContext;

/**
 * @param string $total	payment amount in DDD.DD format
 * @param string $currency	3 letter ISO currency code such as 'USD'
 * @param string $paymentDesc	A description about the payment
 */
class PaypalIntegration implements PaymentIntegrationInterface
{
	/**
	 * Instance of Illuminate\Config\Repository
	 * @var object
	 */
	private $config;

	/**
	 * Instance of Paypal SDK
	 * @var object
	 */
	private $apiContext;

	/**
	 * Injecting dependencies
	 * @param Config $config [description]
	 */
    public function __construct(Config $config)
    {
    	$this->config = $config;
        $this->apiContext();
    }
    
    /**
     * Setup PayPal API context.
     * @return void
     */
    private function apiContext()
    {
        $paypal_conf = $this->config->get('paypal');
        $this->apiContext = new ApiContext(new OAuthTokenCredential(
        	$paypal_conf['client_id'], $paypal_conf['secret']
        ));
        $this->apiContext->setConfig($paypal_conf['settings']);
    }

    /**
     * Make payment using credit card
     * @param  array  $parameters  An array that shoud contain products, credit card,
     *                            total, currency and payment description details
     * @return object 
     */
    public function paymentUsingCC(array $parameters)
    {
    	try {
	    	$items = $this->addItems($parameters['products'], $parameters['currency']);
	    	$fi = $this->setFundingInstrument($this->getCreditCardToken($this->saveCard($parameters['credit_card'])));
			$payer = $this->setPaymentMethod('credit_card', $fi);
			$amount = $this->paymentAmount($parameters['total'], $parameters['currency']);
			$transaction = $this->transaction($amount, $parameters['payment_description'], $items);
		} catch(Exception $e) {
			echo $e->getData();
			exit;
		} catch(PayPalConnectionException $e) {
			echo $e->getData();
			exit;
		}
		return $this->makePayment($payer, $transaction);
    }

    /**
	 * Create a payment using the buyer's paypal account as the funding instrument.
	 * Your app will have to redirect the buyer to the paypal website, obtain their
	 * consent to the payment and subsequently execute the payment using the execute
	 * API call. 
	 * 
	 * @param array  $parameters  An array that shoud contain products, credit card,
     *                            total, currency and payment description details
	 * @param string $returnUrl	  The url to which the buyer must be redirected
	 * 				              to on successful completion of payment
	 * @param string $cancelUrl	  The url to which the buyer must be redirected
	 * 				              to if the payment is cancelled$cancelUrl
	 * @return \PayPal\Api\Payment
	 */
	public function paymentUsingPaymentService(array $parameters, $redirectUrl, $cancelUrl)
	{
		try {
			$items = $this->addItems($parameters['products'], $parameters['currency']);
			$payer = $this->setPaymentMethod('paypal');
			$amount = $this->paymentAmount($parameters['total'], $parameters['currency']);
			$transaction = $this->transaction($amount, $parameters['payment_description'], $items);
			$redirectUrls = $this->redirectUrls($redirectUrl, $cancelUrl);
			return $this->makePayment($payer, $transaction, $redirectUrls);
		} catch(Exception $e) {
			echo $e->getData();
			exit;
		} catch(PayPalConnectionException $e) {
			echo $e->getData();
			exit;
		}
	}

	/**
	 * Process a refund on a sale transaction created using the Payments API.
	 * Includes both the refunded amount (to Payer) and refunded fee (to Payee).
	 * Use the $amt->details field to mention fees refund details.
	 * Create a new apiContext object so we send a new PayPal-Request-Id 
	 * (idempotency) header for this resource
	 * 
	 * @param  string $saleId
	 * @param  string $currency
	 * @param  string $amount
	 */
	public function refund($saleId, $currency, $amount)
	{
		$amount = $this->paymentAmount($amount, $currency);
		$refund = $this->refundPaypal($amount);
		$sale = $this->sale($saleId);

		try {
		    $apiContext = $this->apiContext();
		    $refundedSale = $sale->refund($refund, $apiContext);
		} catch (Exception $e) {
			echo $e->getData();
		    exit(1);
		}
		return $refundedSale;
	}

	/**
	 * Add item by setting item's details
	 * @param array $products
	 */
	private function addItems(array $products, $currency)
	{
		$items = [];
		foreach ($products as $product) {
			$item = new Item();

		    $item->setName($product['name'])
		    	->setCurrency($currency)
		    	->setQuantity($product['quantity'])
		    	->setPrice($product['price']);
		    $items[] = $item;
		}

		return $this->addToItemList($items);	    
	}

	/**
	 * Add items to item list
	 * @param array $items
	 */
	private function addToItemList($items)
	{
		$itemList = new ItemList();
	    $itemList->setItems($items);
	    return $itemList;
	}

	/**
	 * Set payment method
	 * @param string $method A payment method either credit_card or paypal
	 * @return PayPal\Api\Payer
	 */
	private function setPaymentMethod($method, $fi = null)
	{
		$payer = new Payer();
		$payer->setPaymentMethod($method);

		if('credit_card' === $method) {
			$payer->setFundingInstruments(array($fi));
		}

		return $payer;
	}

	/**
	 * Specify the payment amount
	 * @param  integer $total
	 * @param  string $currency
	 * @return PayPal\Api\Amount
	 */
	private function paymentAmount($total, $currency)
	{
		$amount = new Amount();
		$amount->setCurrency($currency);
		$amount->setTotal($total);
		return $amount;
	}

	/**
	 * Set transaction. A transaction defines the contract of a payment - what is the payment
	 * for and who is fulfilling it. Transaction is created with a `Payee` and `Amount` types
	 * @param  integer $amount
	 * @param  string $paymentDesc
	 * @return PayPal\Api\Transaction
	 */
	private function transaction($amount, $paymentDesc, $items)
	{
		$transaction = new Transaction();
		$transaction->setAmount($amount);
		$transaction->setItemList($items);
		$transaction->setDescription($paymentDesc);
		return $transaction;
	}

	/**
	 * Set return and cancel urls for paypal payment method
	 * @param  string $returnUrl
	 * @param  string $cancelUrl
	 * @return PayPal\Api\RedirectUrls
	 */
	private function redirectUrls($returnUrl, $cancelUrl)
	{
		$redirectUrls = new RedirectUrls();
		$redirectUrls->setReturnUrl($returnUrl);
		$redirectUrls->setCancelUrl($cancelUrl);
		return $redirectUrls;
	}

	/**
	 * Make payment
	 * @param  PayPal\Api\Payer $payer
	 * @param  PayPal\Api\Transaction $transaction
	 * @return PayPal\Api\Payment
	 */
	private function makePayment($payer, $transaction, $redirectUrls = null)
	{
		$payment = new Payment();

		if(null !== $redirectUrls) {
			$payment->setRedirectUrls($redirectUrls);
		}

		$payment->setIntent("sale");
		$payment->setPayer($payer);
		$payment->setTransactions(array($transaction));
		$payment->create($this->apiContext);
		return $payment;
	}

    /**
	 * Save a credit card with paypal
	 * 
	 * This helps you avoid the hassle of securely storing credit
	 * card information on your site. PayPal provides a credit card
	 * id that you can use for charging future payments.
	 * 
	 * @param array $params	credit card parameters
	 * @return PayPal\Api\CreditCard
	 */
    private function saveCard($params)
    {
		$card = new CreditCard();
		$card->setType($params['type']);
		$card->setNumber($params['number']);
		$card->setExpireMonth($params['expire_month']);
		$card->setExpireYear($params['expire_year']);
		$card->setCvv2($params['cvv']);
		
		$card->create($this->apiContext);
		return $card->getId();
	}

	/**
	 * Get credit card token
	 */
	private function getCreditCardToken($creditCardId)
	{
		$ccToken = new CreditCardToken();
		$ccToken->setCreditCardId($creditCardId);
		return $ccToken;
	}

	/**
	 * Set funding instrument
	 */
	private function setFundingInstrument($ccToken)
	{
		$fi = new FundingInstrument();
		$fi->setCreditCardToken($ccToken);
		return $fi;
	}

	/**
	 * Utility method that returns the first url of a certain
	 * type. Returns empty string if no match is found
	 * 
	 * @param array $links
	 * @param string $type 
	 * @return string
	 */
	public function getLink(array $links, $type)
	{
		foreach($links as $link) {
			if($link->getRel() == $type) {
				return $link->getHref();
			}
		}
		return "";
	}

	/**
	 * Completes the payment once buyer approval has been
     * obtained. Used only when the payment method is 'paypal'
	 * @param string $payerId PayerId as returned by PayPal post buyer approval.
	 * @return [type]          [description]
	 */
	public function executePayment($paymentId, $payerId)
	{
		try {
			$payment = $this->getPaymentDetails($paymentId);
			$paymentExecution = new PaymentExecution();
			$paymentExecution->setPayerId($payerId);
			$payment = $payment->execute($paymentExecution, $this->apiContext);
			return $payment;
		} catch(Exception $e) {
			echo $e->getData();
			exit;
		} catch(PayPalConnectionException $e) {
			echo $e->getData();
			exit;
		}
	}

	/**
	 * Retrieves the payment information based on PaymentID from Paypal APIs
	 *
	 * @param $paymentId
	 *
	 * @return Payment
	 */
	private function getPaymentDetails($paymentId)
	{
	    $payment = Payment::get($paymentId, $this->apiContext);
	    return $payment;
	}

	/**
	 * Refund object
	 * @param  PayPal\Api\Amount $amount [description]
	 * @return PayPal\Api\Refund
	 */
	private function refundPaypal($amount)
	{
		$refund = new Refund();
		$refund->setAmount($amt);
		return $refund;
	}

	/**
	 * A sale transaction. Create a Sale object with the given sale transaction id.
	 * @param  string $saleId
	 * @return PayPal\Api\Sale
	 */
	private function sale($saleId)
	{
		$sale = new Sale();
		$sale->setId($saleId);
		return $sale;
	}
}