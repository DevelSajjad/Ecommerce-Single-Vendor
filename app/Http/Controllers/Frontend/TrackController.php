<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;

class TrackController extends Controller
{
    public function trackOrder(Request $request)
    {
        $order = Order::with('user', 'division', 'district', 'state')->where('invoice_no', $request->invoice_no)->first();
        $order_items = OrderItem::with('product')->where('order_id', $order->id)->orderBy('id', 'desc')->limit(10)->get();
        return view('frontend.track_order', compact('order', 'order_items') );
    }
}
