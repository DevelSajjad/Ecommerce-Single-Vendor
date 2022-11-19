<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    public function couponPage()
    {
        
        $coupons = Coupon::where('status', 1)->orderByDesc('id')->get();
        return view('admin.coupon.coupon_page', compact('coupons'));
    }
    public function addCoupon(Request $request)
    {
        $request->validate([
            'coupon_name' => 'required',
            'coupon_discount' => 'required|numeric|min:1|max:100',
            'coupon_validity' => 'required',
        ]);
        Coupon::insert([
            'coupon_name' => $request->coupon_name,
            'coupon_discount' => $request->coupon_discount,
            'coupon_validity' => $request->coupon_validity,
            'created_at'    => Carbon::now(),
        ]);
        return redirect()->back()->with('success', 'Add Coupon Successful');
    }
    public function editCoupon(Request $request, $id = null)
    {
        
        if ($request->isMethod('get')) {
            $coupon = Coupon::findOrFail($id);
            return view('admin.coupon.edit_coupon', compact('coupon'));
        }
         
        $coupon_id = $request->coupon_id;
        $request->validate([
            'coupon_name' => 'required',
            'coupon_discount' => 'required|numeric|min:1|max:100',
            'coupon_validity' => 'required',
        ]);
        Coupon::findOrFail($coupon_id)->update([
            'coupon_name' => $request->coupon_name,
            'coupon_discount' => $request->coupon_discount,
            'coupon_validity' => $request->coupon_validity,
            'updated_at'    => Carbon::now(),
        ]);
        return redirect()->back()->with('message', 'Coupon Update Successful');
    }
    public function deleteCoupon($id)
    {
        Coupon::findOrFail($id)->delete();
        return redirect()->route('coupon')->with('message', 'Coupon Delete Successful' );
    }

}
