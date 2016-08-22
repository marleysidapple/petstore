<?php

namespace App\Interfaces;

interface PaymentInterface
{
	/**
     * Make payment
     * @param  array  $parameters  Should contain products, params, total, currency, paymentDesc
     * @return object 
     */
    public function makePayment(array $paramters);

    /**
     * Execute payment
     * @param  string $paymentId
     * @param  string $payerId
     */
    public function executePayment($paymentId, $payerId);
}