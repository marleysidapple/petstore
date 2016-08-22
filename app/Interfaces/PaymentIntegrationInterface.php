<?php

namespace App\Interfaces;

interface PaymentIntegrationInterface
{
	/**
     * Make payment using credit card
     * @param  array  $parameters  Should contain products, params, total, currency, paymentDesc
     * @param  string $creditCardId
     * @param  integer $total
     * @param  string $currency
     * @param  string $paymentDesc
     * @return object 
     */
    public function paymentUsingCC(array $paramters);

    /**
	 * Create a payment using the buyer's paypal account as the funding instrument.
	 * Your app will have to redirect the buyer to the paypal website, obtain their
	 * consent to the payment and subsequently execute the payment using the execute
	 * API call. 
	 * 
	 * @param array  $parameters  Should contain products, params, total, currency, paymentDesc
	 * @param string $total	payment amount in DDD.DD format
	 * @param string $currency	3 letter ISO currency code such as 'USD'
	 * @param string $paymentDesc	A description about the payment
	 * @param string $returnUrl	The url to which the buyer must be redirected
	 * 				to on successful completion of payment
	 * @param string $cancelUrl	The url to which the buyer must be redirected
	 * 				to if the payment is cancelled
	 */
	public function paymentUsingPaymentService(array $paramters, $returnUrl, $cancelUrl);
}