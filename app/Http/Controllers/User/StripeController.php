<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StripeController extends Controller
{
    public function paymentOrderStore(Request $request) 
    {
                // Set your secret key. Remember to switch to your live secret key in production.
        // See your keys here: https://dashboard.stripe.com/apikeys
        \Stripe\Stripe::setApiKey('sk_test_51M7Cu3Ivvg37wLtGV7LYqE7HkUzV4uqMv71dZqlsHKhJiorc1YE3Whvas65yZave4HhC8dlWtMBQ6eR8LbyVaCqe00epnt4AkC');

        // Token is created using Checkout or Elements!
        // Get the payment token ID submitted by the form:
        $token = $_POST['stripeToken'];

        $charge = \Stripe\Charge::create([
        'amount' => 999*100,
        'currency' => 'usd',
        'description' => 'Payment from Filmart',
        'source' => $token,
        'metadata' => ['order_id' => '6735'],
        ]);
        dd($request->input());
    }
}
