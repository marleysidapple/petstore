<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Services\OrderService;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    function __construct(OrderService $orderService, Request $request)
    {
    	$this->orderService = $orderService;
    	$this->request = $request;
    }

    public function index()
    {
    	$limit = $this->request->get('limit') ? $this->request->get('limit') : 10;
    	$completeOrders = $this->orderService->allComplete($limit);
    	$pendingOrders = $this->orderService->allPending(3);
    	return view('admin.orders.all', compact('completeOrders', 'pendingOrders'));
    }

    public function markComplete($id)
    {
        $order = $this->orderService->markComplete($id);
        return redirect()->route('orders.index')
            ->with('flash_message', 'Order is marked complete.');
    }

    public function markPending($id)
    {
        $order = $this->orderService->markPending($id);
        return redirect()->route('orders.index')
            ->with('flash_message', 'Order is revoked to pending.');
    }
}
