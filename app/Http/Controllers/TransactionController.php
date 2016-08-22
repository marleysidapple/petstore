<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Interfaces\PaymentInterface;
use App\Repositories\ShipToRepository;
use App\Services\OrderPaymentService;
use App\Services\OrderService;
use App\Services\Validations\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
	/**
	 * Injecting dependencies
	 * 
	 * @param Request              $request
	 * @param Validator            $validator
     * @param PaymentInterface     $paymentService,
     * @param OrderPaymentService  $orderPaymentService,
     * @param OrderService         $orderService
	 */
    function __construct(
        Request $request,
        Validator $validator,
        PaymentInterface $paymentService,
        OrderPaymentService $orderPaymentService,
        OrderService $orderService
    )
    {
    	$this->request = $request;
    	$this->validator = $validator;
        $this->paymentService = $paymentService;
        $this->orderPaymentService = $orderPaymentService;
        $this->orderService = $orderService;
    }

    public function processTransaction(ShipToRepository $shipToRepository)
    {
        $parameters = $this->request->all();
    	$validate = $this->validator->isValid($parameters);

        if(!$validate) {
            return $this->validator->getErrors();
        }

        $params = $this->filterProducts($parameters);
        $payment = $this->paymentService->makePayment($params);

        $shipTo = $shipToRepository->save([
            'company_name' => $parameters['company_name'],
            'contact_address' => $parameters['contact_address'],
            'phone_number' => $parameters['phone_number'],
            'email' => $parameters['email'],
            'ein_sale_tax' => $parameters['ein_sale_tax'],
            'fax_number' => $parameters['fax_number'],
            'shipping_address' => $parameters['shipping_address'],
            'billing_address' => $parameters['billing_address'],
            'zip' => $parameters['zip'],
        ]);

        $orderPayment = $this->orderPaymentService->save([
            'payment_id' =>  $payment->getId(),
            'state' => $payment->getState(),
            'amount' => $params['total'],
            'description' => $params['payment_description'],
            'user_id' => Auth::user()->id,
            'ship_to_id' => $shipTo->id
        ]);

        if('credit_card' === $params['method']) {
            foreach ($params['products'] as $product) {
                $this->orderService->save(array_merge($params, [
                    'product_id' => $product['product_id'],
                    'price' => $product['price'],
                    'quantity' => $product['quantity'],
                    'payer_id' => $payment->payer->funding_instruments[0]->credit_card_token->credit_card_id,
                    'order_payment_id' => $orderPayment->id
                ]));
            }
            
            $relatedResources = $payment->getTransactions()[0]->getRelatedResources();

            $this->orderPaymentService->updateStateSalesIdAndTransactionFeeByPaymentId($payment->getId(), [
                'sale_id' => $relatedResources[0]->sale->id,
                'state' => $payment->getState()
            ]);

            // $this->account->saveCreditCardId(Auth::user()->username, $this->paymentService->getCreditCardId());
            return redirect()->route('orders.makeOrder')
                ->with('flash_message', 'Order is successfully completed.');
        } elseif('paypal' === $params['method']) {
            $this->orderService->saveMultipleOrders(array_merge($params, [
                'order_payment_id' => $orderPayment->id
            ]));

            return $this->paymentService->redirectToPaymentService();
        }

        return $params;
    }

    /**
     * Process redirects from payment services
     * @param  Request $request
     */
    public function processRedirect()
    {
        if((bool)$this->request->get('success')) {
            $paymentId = $this->request->get('paymentId');
            $payment = $this->paymentService->executePayment($paymentId, $this->request->get('PayerID'));
            $transaction = $payment->getTransactions();
            $relatedResources = $transaction[0]->getRelatedResources();

            $orderPayment = $this->orderPaymentService->updateStateSalesIdAndTransactionFeeByPaymentId($paymentId, [
                'sale_id' => $relatedResources[0]->sale->id,
                'transaction_fee' => $relatedResources[0]->sale->transaction_fee->value,
                'state' => $payment->getState()
            ]);

            $this->orderService->updateOrderByOrderPaymentId($orderPayment->id, ['payer_id' => $this->request->get('PayerID')]);
            return redirect()->route('orders.makeOrder')->with('flash_message', 'Order is successfully completed.');
        }   
        return redirect()->route('orders.makeOrder')->with('flash_message', 'Order not complete.');
    }

    public function filterProducts(array $parameters)
    {
        $params['total'] = 0;

        foreach ($parameters['products'] as $key => $product) {
            if('' == trim($product['quantity'])) {
                continue;
            }

            $params['products'][$key] = $product;
            $params['total'] += $product['quantity'] * $product['price'];
        }

        $params['currency'] = $parameters['currency'];
        $params['payment_description'] = 'Buying dogs chews.';
        $params['method'] = $parameters['method'];

        if('credit_card' === $parameters['method']) {
            $params['credit_card']['type'] = strtolower($parameters['card_type']);
            $params['credit_card']['number'] = $parameters['card_number'];
            $params['credit_card']['expire_month'] = $parameters['card_expire_month'];
            $params['credit_card']['expire_year'] = $parameters['card_expire_year'];
            $params['credit_card']['cvv'] = $parameters['card_cvv'];
        }

        return $params;
    }

    /**
     * Create orders record
     * @param  array $params
     * @param  string $payment   
     */
    private function createOrder($parameters, $payment)
    {
        $orderPayment = $this->orderPayment->save([
            'payment_id' =>  $payment->getId(),
            'state' => $payment->getState(),
            'amount' => $parameters['total'],
            'description' => $parameters['payment_description']
        ]);
        
        $this->order->addOrders(
            $parameters, $orderPayment->id
        );

        return $orderPayment->id;
    }
}
