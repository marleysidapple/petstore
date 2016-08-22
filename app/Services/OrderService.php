<?php

namespace App\Services;

use App\Repositories\OrderRepository;

class OrderService
{
	/**
	 * Injecting dependencies
	 * 
	 * @param OrderRepository $orderRepository
	 */
	function __construct(OrderRepository $orderRepository)
	{
		$this->orderRepository = $orderRepository;
	}

	public function all($limit, array $data = [])
	{
		return $this->orderRepository->all($limit, $data);
	}

	public function allComplete($limit, array $data = [])
	{
		return $this->orderRepository->allComplete($limit, $data);
	}

	public function allPending($limit, array $data = [])
	{
		return $this->orderRepository->allPending($limit, $data);
	}

	public function get($id)
	{
		return $this->orderRepository->get($id);
	}

	public function save(array $data)
	{
		return $this->orderRepository->save($data);
	}

	public function update($id, array $data)
	{
		return $this->orderRepository->update($id, $data);
	}

	public function delete($id)
	{
		$this->orderRepository->delete($id);
	}

	public function saveMultipleOrders(array $data)
	{
		foreach($data['products'] as $product) {
			$item = array_merge($product, [
				'currency' => $data['currency'],
				'order_payment_id' => $data['order_payment_id']
			]);
			$this->save($item);
		}
	}

	public function updateOrderByOrderPaymentId($orderPaymentId, array $data)
	{
		return $this->orderRepository->updateOrderByOrderPaymentId($orderPaymentId, $data);
	}

	public function markComplete($id)
    {
        return $this->orderRepository->markComplete($id);
    }

    public function markPending($id)
    {
        return $this->orderRepository->markPending($id);
    }
}