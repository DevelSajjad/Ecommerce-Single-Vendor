<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use App\Models\Product;
use App\Models\ShipDivision;
use App\Models\Wishlist;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    // Add Product in Cart
    public function addCartData(Request $request, $product_id)
    {
        if (Session::has('coupon')) {
            Session::forget('coupon');
        }
        $product = Product::findOrFail($product_id);
        Cart::add([
            'id' => $product_id,
             'name' => $request->product_name, 
             'qty' => $request->quantity, 
             'price' => $product->selling_price, 
             'weight' => 1, 
             'options' => [
                 'size' => $request->size,
                'color' => $request->color,
                'image' => $product->product_thumbnail,
                'slug' => $product->product_slug_en, 
                ], 
        ]);
        return response()->json(['success' => 'Successful Add To Cart']);
    }
    //View Cart in Modal
    public function viewCart()
    {
        $carts = Cart::content();
        $cartQty = Cart::count();
        $cartTotal = Cart::total();
        return response()->json(array(
            'carts' => $carts,
            'cartQty' => $cartQty,
            'cartTotal' => round($cartTotal), 
        ));
    }
    //Remove Cart
    public function removeCart($rowId)
    {
        if(Session::has('coupon')) {
            session()->forget('coupon');
        }
        Cart::remove($rowId);
        return response()->json(['success' => 'Cart Remove Successful']);
    }
//  Add Product in Wishlist 
    public function addWishlist(Request $request, $product_id)
    { 
        if (!auth()->check()) {
            return response()->json(['error'=> 'At First Login']); 
        }
        $wishlist = Wishlist::where('user_id', auth()->user()->id)->where('product_id', $product_id);
        if (!$wishlist->exists()) {
            Wishlist::insert([
                'user_id' => auth()->user()->id,
                'product_id' => $product_id,
                'created_at' => Carbon::now(),
            ]);
            return response()->json(['success' => 'Add Successful in Wishlist']);
        } 
            return response()->json(['error' => 'Already Product in Wishlist']);
    }

    // =====================Cart List Page=================
    public function cartListView()
    {
        return view('Frontend.cart_list');
    }
    //View Cart data by list
    public function cartListData()
    {
        $data['carts'] = Cart::content();
        $data['cartQty'] = Cart::count();
        $data['Total'] = Cart::total();
        return response()->json($data);
    }
    //Cart Increment
    public function cartQuantityIncrement($rowId)
    {
        $cartQty = Cart::get($rowId);
        Cart::update($rowId, $cartQty->qty + 1);
        if(Session::has('coupon')) {
            $coupon_name = session()->get('coupon')['coupon_name'];
            $coupon = Coupon::where('coupon_name', $coupon_name)->first();
            Session::put('coupon', [
                'coupon_name' => $coupon->coupon_name,
                'coupon_discount' => $coupon->coupon_discount,
                'discount_amount' => round(Cart::total() * $coupon->coupon_discount / 100),
                'total_amount' => round(Cart::total() - Cart::total() * $coupon->coupon_discount / 100),
            ]);
        }
        return response()->json();
    }
    ///Cart Decrement
    public function cartQuantityDecrement($rowId)
    {
        $cartQty = Cart::get($rowId);
        Cart::update($rowId, $cartQty->qty - 1);
        if(Session::has('coupon')) {
            $coupon_name = session()->get('coupon')['coupon_name'];
            $coupon = Coupon::where('coupon_name', $coupon_name)->first();
            Session::put('coupon', [
                'coupon_name' => $coupon->coupon_name,
                'coupon_discount' => $coupon->coupon_discount,
                'discount_amount' => round(Cart::total() * $coupon->coupon_discount / 100),
                'total_amount' => round(Cart::total() - Cart::total() * $coupon->coupon_discount / 100),
            ]);
        }
        return response()->json();
    }
    //Coupon Apply///
    public function couponApply(Request $request)
    {   
        $date = date_create("2022-12-17");
        $coupon = Coupon::where('coupon_name', $request->coupon_name)->where('coupon_validity', '<',$date )->first();
        if($coupon) {
            Session::put('coupon', [
                'coupon_name' => $coupon->coupon_name,
                'coupon_discount' => $coupon->coupon_discount,
                'discount_amount' => round(Cart::total() * $coupon->coupon_discount / 100),
                'total_amount' => round(Cart::total() - Cart::total() * $coupon->coupon_discount / 100),
            ]);
            return response()->json(['success' => 'Coupon Apply Successful']);
        } else {
            return response()->json(['error' => 'This Coupon is Invalid']);
        }
    }
    public function couponCalculation()
    {
        if(Session::has('coupon')) {
            return response()->json(array(
                'subtotal'          => Cart::total(),
                'coupon_name'       => session()->get('coupon')['coupon_name'],
                'coupon_discount'   => session()->get('coupon')['coupon_discount'],
                'discount_amount'   => session()->get('coupon')['discount_amount'],
                'total_amount'      => session()->get('coupon')['total_amount'],
            ));
        } else {
            return response()->json(array(
                'total' => Cart::total(),
            ));
        }
    }
    public function couponRemove()
    {
        Session::forget('coupon');
        return response()->json(['success' => 'Coupon Remove Successful']);
    }
    public function checkout()
    {
        $data['carts'] = Cart::content();
        $data['cartQty'] = Cart::count();
        $data['total'] = Cart::total();
        $data['divisions'] = ShipDivision::orderBy('division_name', 'ASC')->get();
        if(Auth::user()) {
            if($data['cartQty'] > 0) {
                return view('frontend.checkout', $data);
            }
            return redirect()->back();
        }
        return redirect()->route('home')->with('error', 'You May Login First');
    }
}
