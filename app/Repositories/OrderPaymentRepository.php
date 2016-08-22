<?php

namespace App\Repositories;

use App\Interfaces\SaveInterface;
use App\OrderPayment;

class OrderPaymentRepository implements SaveInterface
{
	/**
	 * Injecting dependencies
	 * 
	 * @param OrderPayment $orderPayment
	 */
	function __construct(OrderPayment $orderPayment)
	{
		$this->orderPayment = $orderPayment;
	}

	public function save(array $data)
	{
		return $this->orderPayment->create($data);
	}

	public function updateStateSalesIdAndTransactionFeeByPaymentId($paymentId, array $data)
	{
		$orderPayment = $this->orderPayment->where('payment_id', $paymentId)->first();
		$orderPayment->update($data);
		return $orderPayment;
	}
}