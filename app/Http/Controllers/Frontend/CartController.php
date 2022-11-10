<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Cart;
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
             'options' => ['size' => $request->size],
             'options' => ['color' => $request->color],
             'options' => ['image' => $product->product_thumbnail]
        ]);
        return response()->json(['message' => 'Successful Add To Cart']);
    }
}
