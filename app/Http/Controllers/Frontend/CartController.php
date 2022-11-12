<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
class CartController extends Controller
{
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
                'image' => $product->product_thumbnail
                ],
             
        ]);
        return response()->json(['success' => 'Successful Add To Cart']);
    }
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
    public function removeCart($rowId)
    {
        Cart::remove($rowId);
        return response()->json(['success' => 'Cart Remove Successful']);
    }
}
