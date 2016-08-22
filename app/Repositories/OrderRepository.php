<?php

namespace App\Repositories;

use App\Interfaces\SaveInterface;
use App\Order;

class OrderRepository implements SaveInterface
{
	/**
	 * Injecting dependencies
	 * 
	 * @param Order $order
	 */
	function __construct(Order $order)
	{
		$this->order = $order;
	}

	public function all($limit, array $data = [])
	{
		return $this->order->with('product', 'orderPayment.shipTo')->latest()->get();
	}

	public function allComplete($limit, array $data = [])
	{
		return $this->order->with('product', 'orderPayment.shipTo')
			->where('is_complete', 1)
		    ->latest()->paginate($limit);
	}

	public function allPending($limit, array $data = [])
	{
		return $this->order->with('product', 'orderPayment.shipTo')
			->where('is_complete', 0)
		    ->latest()->paginate($limit);
	}

	public function save(array $data)
	{
		return $this->order->create($data);
	}

	public function get($id)
	{
		return $this->order->with('product', 'orderPayment.shipTo')->findOrFail($id);
	}

	public function update($id, array $data)
	{
		$order = $this->get($id);
		$order->update($data);
		return $this->get($id);
	}

	public function delete($id)
	{
		$this->get($id)->delete();
	}

	public function updateOrderByOrderPaymentId($orderPaymentId, array $data)
	{
		$order = $this->order->where('order_payment_id', $orderPaymentId)->first();
		$order->update($data);
	}

	public function markComplete($id)
    {
        $order = $this->get($id);   
        $order->is_complete = 1;
        return $order->save();
    }

    public function markPending($id)
    {
        $order = $this->get($id);
        $order->is_complete = 0;
        return $order->save();
    }
}