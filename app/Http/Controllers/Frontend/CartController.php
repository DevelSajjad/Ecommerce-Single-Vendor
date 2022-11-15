<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Wishlist;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
class CartController extends Controller
{
    // Add Product in Cart
    public function addCartData(Request $request, $product_id)
    {
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
        return response()->json();
    }
    ///Cart Decrement
    public function cartQuantityDecrement($rowId)
    {
        $cartQty = Cart::get($rowId);
        Cart::update($rowId, $cartQty->qty - 1);
        return response()->json();
    }
}
