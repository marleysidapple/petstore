<?php

namespace App\Services;

use App\Interfaces\SaveInterface;

class OrderPaymentService
{
	function __construct(SaveInterface $orderPayment)
	{
		$this->orderPayment = $orderPayment;
	}

	public function save(array $data)
	{
		return $this->orderPayment->save($data);
	}

	public function updateStateSalesIdAndTransactionFeeByPaymentId($paymentId, array $data)
	{
		return $this->orderPayment->updateStateSalesIdAndTransactionFeeByPaymentId($paymentId, $data);
	}
}