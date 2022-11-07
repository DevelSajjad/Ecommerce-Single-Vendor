<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\MultiImg;
use App\Models\Product;
use App\Models\Slider;

class IndexController extends Controller
{
    public function index()
    {
        $data['categories'] = Category::orderBy('category_name_en', 'asc')->get();
        $data['sliders']    = Slider::where('status', 1)->orderBy('id', 'desc')->limit(5)->get();
        $data['products']   = Product::where('status', 1)->orderBY('id', 'desc')->get();
        $data['features']   = Product::where('featured', 1)->where('status', 1)->orderBy('id', 'desc')->get();
        return view('frontend.index', $data );
    }
    public function productDetail($id,$slug)
    {
        $data['products'] = Product::findOrFail($id);
        $data['multiImg'] = MultiImg::where('product_id', $id)->latest()->get();
        return view('frontend.product_detail', $data);
    }
}
