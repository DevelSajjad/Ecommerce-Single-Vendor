<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class StockMangeController extends Controller
{
    public function index()
    {
        $products = Product::latest()->get();
        return view('admin.stock.index', compact('products'));
    }

    public function editStock($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.stock.edit_stock', compact('product'));
    }

    public function updateStock(Request $request, $id)
    {
        $request->validate([
            // 'product_name'      => 'required',
            // 'product_code'      => 'required',
            'product_qty'      => 'required|integer',
        ]);

        Product::findOrFail($id)->update([
            'product_qty'   => $request->product_qty
        ]);
        return redirect()->route('stock-manage')->with('message', 'Stock Update Successful');
    }
}
