<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Mail\OrderMail;
use App\Models\Order;
use App\Models\OrderItem;
use Carbon\Carbon;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class StripeController extends Controller
{
    public function paymentOrderStore(Request $request) 
    {
        if(Session::has('coupon')) {
            $total_amount = Session::get('coupon')['total_amount'];
        } else {
            $total_amount = Cart::total();
        }
        // Set your secret key. Remember to switch to your live secret key in production.
        // See your keys here: https://dashboard.stripe.com/apikeys
        \Stripe\Stripe::setApiKey('sk_test_51M7Cu3Ivvg37wLtGV7LYqE7HkUzV4uqMv71dZqlsHKhJiorc1YE3Whvas65yZave4HhC8dlWtMBQ6eR8LbyVaCqe00epnt4AkC');
        $token = $_POST['stripeToken'];
        $charge = \Stripe\Charge::create([
        'amount' => round($total_amount*100),
        'currency' => 'BDT',
        'description' => 'Payment from Filmart',
        'source' => $token,
        'metadata' => ['order_id' => uniqid()],
        ]);
    
        $order_id = Order::insertGetId([
            'user_id'               => Auth::user()->id,
            'division_id'           => $request->division_id,
            'district_id'           => $request->district_id,
            'state_id'              => $request->state_id,
            'post_code'             => $request->post_code,
            'name'                  => $request->name,
            'email'                 => $request->email,
            'phone'                 => $request->phone,
            'note'                  => $request->note,
            'payment_type'          => 'stripe',
            'transaction_id'        => $charge->balance_transaction,
            'currency'              => $charge->currency,
            'amount'                => $total_amount,
            'order_number'          => $charge->metadata->order_id,
            'invoice_no'            => 'SML'.mt_rand(10000000, 99999999),
            'order_date'            => Carbon::now()->format('d F Y'),
            'order_month'           => Carbon::now()->format('F'),
            'order_year'            => Carbon::now()->format('Y'),
            'status'                => 'Pending',
            'created_at'            => Carbon::now()
        ]);
        // Start Mail
        $orders = Order::findOrFail($order_id);
        $mailData = [
            'name' => $orders->name,
            'number' => $orders->phone,
            'invoice_no' => $orders->invoice_no,
            'tran_id'   => $orders->transaction_id,
            'payment_type' => $orders->payment_type,
            'amount'    => $orders->amount
        ];
        Mail::to($request->email)->send(new OrderMail($mailData));
        // End Mail
        $carts = Cart::content();
        foreach ($carts as $cart) {
            OrderItem::insert([
                'order_id'          => $order_id,
                'product_id'        => $cart->id,
                'color'             => $cart->options->color,
                'size'              => $cart->options->size,
                'qty'               => $cart->qty,
                'price'             => $cart->price,
                'created_at'        => Carbon::now()
            ]);
        }
        if (Session::has('coupon')) {
            Session::forget('coupon');
        }
        Cart::destroy();
        return redirect()->route('home')->with('message', 'You Order Place Successful');
    }
}
