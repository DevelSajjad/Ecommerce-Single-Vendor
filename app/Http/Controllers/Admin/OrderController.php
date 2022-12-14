<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function pendingOrder()
    {
        $pending_order = Order::where('status', 'Pending')->orderBy('id', 'desc')->get();
        return view('admin.order.pending_order', compact('pending_order'));
    }
}
