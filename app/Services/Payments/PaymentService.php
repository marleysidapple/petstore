<?php

namespace App\Services\Payments;

use App\Interfaces\PaymentIntegrationInterface;
use App\Interfaces\PaymentInterface;

class PaymentService implements PaymentInterface
{
	/**
	 * Redirect uri to payment service
	 * @var string
	 */
	private $redirectURI;

	/**
	 * Injecting dependencies
	 * @param PaymentIntegrationInterface $payment
	 */
	function __construct(PaymentIntegrationInterface $payment)
	{
		$this->payment = $payment;
	}

	/**
     * Make payment with eiterh credit card or paypal
     * @param  array $parameters
     * @return Redirect
     */
    public function makePayment(array $parameters)
    {
        if('credit_card' === $parameters['method']) {
            $payment = $this->payment->paymentUsingCC($parameters);
        } elseif('paypal' === $parameters['method']) {
            $payment = $this->payment->paymentUsingPaymentService(
                $parameters,
                route('paypal.redirect').'?success=true',
                route('paypal.redirect').'?success=fail'
            );
            $this->redirectURI = $this->payment->getLink($payment->getLinks(), 'approval_url');
        }
        return $payment;
    }

    /**
     * Execute payment
     * @param  string $paymentId
     * @param  srting $payerId
     */
    public function executePayment($paymentId, $payerId)
    {
    	return $this->payment->executePayment($paymentId, $payerId);
    }

    /**
     * Redirect to paypal with approval url
     * @return Redirect
     */
    public function redirectToPaymentService()
    {
    	return redirect($this->redirectURI);
    }
}