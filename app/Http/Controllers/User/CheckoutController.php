<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\ShipDistrict;
use App\Models\ShipState;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function getDistrict($division_id)
    {
        $district = ShipDistrict::where('division_id', $division_id)->orderBy('district_name', 'asc')->get();
        return response()->json($district);
    }
    public function getState($district_id)
    {
        $state = ShipState::where('district_id', $district_id)->orderBy('state_name', 'asc')->get();
        return response()->json($state);
    }
    public function paymentInfoStore(Request $request)
    {
        $data['shipping_name'] = $request->shipping_name;
        $data['shipping_email'] = $request->shipping_email;
        $data['shipping_phone'] = $request->shipping_phone;
        $data['post_code'] = $request->post_code;
        $data['division_id'] = $request->division_name;
        $data['district_id'] = $request->district_name;
        $data['state_id'] = $request->state_name;
        $data['note'] = $request->note;
        $data['total_amount'] = Cart::total();
        $data['qty']      = Cart::count();
        $request->validate([
            'post_code'         => 'required|integer',
            'division_name'     => 'required',
            'district_name'     => 'required',
            'state_name'        =>  'required',
        ]);
        if ($request->payment == 'stripe') {
            return view('frontend.payment.stripe', $data);
        } elseif ($request->payment == 'sslhost') {
            return view('frontend.payment.sslhost', $data);
        } elseif ($request->payment == 'ssleasy') {
            return view('frontend.payment.ssleasy');
        } else {
            return 'cash on delivery';
        }
        
    }
}
