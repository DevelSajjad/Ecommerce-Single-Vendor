<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use PDF;
class OrderController extends Controller
{
    public function pendingOrder()
    {
        $pending_order = Order::where('status', 'Pending')->orderBy('id', 'desc')->get();
        return view('admin.order.pending_order', compact('pending_order'));
    }
    public function processingOrder()
    {
        $processing_order = Order::where('status', 'Processing')->orderBy('id', 'desc')->get();
        return view('admin.order.processing_order', compact('processing_order'));
    }
    public function confirmOrder()
    {
        $confirm_order = Order::where('status', 'Confirm')->orderBy('id', 'desc')->get();
        return view('admin.order.confirm_order', compact('confirm_order'));
    }
    public function pickedOrder()
    {
        $picked_order = Order::where('status', 'Picked')->orderBy('id', 'desc')->get();
        return view('admin.order.picked_order', compact('picked_order'));
    }
    public function shippedOrder()
    {
        $shipped_order = Order::where('status', 'Shipping')->orderBy('id', 'desc')->get();
        return view('admin.order.shipped_order', compact('shipped_order'));
    }
    public function deliveredOrder()
    {
        $delivered_order = Order::where('status', 'Delivered')->orderBy('id', 'desc')->get();
        return view('admin.order.delivered_order', compact('delivered_order'));
    }
    public function cancelOrder()
    {
        $cancel_order = Order::where('status', 'Cancel')->orderBy('id', 'desc')->get();
        return view('admin.order.cancel_order', compact('cancel_order'));
    }

    public function viewOrder($order_id)
    {
        $data['order'] = Order::with('user', 'division', 'district', 'state')->where('id', $order_id)->first();
        $data['order_items'] = OrderItem::with('product')->where('order_id', $order_id)->orderBy('id', 'desc')->limit(10)->get();
        return view('admin.order.view_order', $data);
    }

    ///Order Status Update
    public function pendingToConfirm($order_id)
    {
        Order::findOrFail($order_id)->update(['status' => 'Confirm']);
        return redirect()->route('pending-order')->with('message', 'This Order is Confirmed');
    }
    public function confirmToProcess($order_id)
    {
        Order::findOrFail($order_id)->update(['status' => 'Processing']);
        return redirect()->route('confirm-order')->with('message', 'This Order is Processing');
    }
    public function processToPicked($order_id)
    {
        Order::findOrFail($order_id)->update(['status' => 'Picked']);
        return redirect()->route('processing-order')->with('message', 'This Order is Picked');
    }
    public function pickedToShipped($order_id)
    {
        Order::findOrFail($order_id)->update(['status' => 'Shipping']);
        return redirect()->route('picked-order')->with('message', 'This Order is Shipping');
    }
    public function shippedToDeliver($order_id)
    {
        Order::findOrFail($order_id)->update(['status' => 'Delivered']);
        return redirect()->route('shipped-order')->with('message', 'This Order is Deliver');
    }
    ///Invoice Download
    public function invoiceDownload($order_id)
    {
        $data['order'] = Order::with('user', 'division', 'district', 'state')->first();
        $data['order_items'] = OrderItem::with('product')->where('order_id', $order_id)->orderBy('id', 'desc')->limit(10)->get();
        $pdf = PDF::loadView('admin.order.invoice', $data)->setPaper('a4');
        return $pdf->download('invoice.pdf');    
    }
}
