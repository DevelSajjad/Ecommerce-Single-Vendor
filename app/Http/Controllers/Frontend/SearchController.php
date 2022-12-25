<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function searchProduct(Request $request)
    {
        
        $data['products'] = Product::where('product_name_en', 'LIKE', '%'.$request->search.'%')
                                ->orWhere('product_name_bn', 'LIKE'.'%'.$request->search.'%')
                                ->orWhere('product_tags_en', 'LIKE'.'%'.$request->search.'%')
                                ->orWhere('product_tags_bn', 'LIKE'.'%'.$request->search.'%')
                                ->orWhere('product_code', 'LIKE'.'%'.$request->search.'%')
                                ->orWhere('product_color_en', 'LIKE'.'%'.$request->search.'%')
                                ->paginate(5);
        
        $data['categories'] = Category::orderBy('category_name_en', 'asc')->get();
         return view('frontend.search_product', $data);  
    } 

    public function autoSearchProduct(Request $request)
    {
        
        $data['products'] = Product::where('product_name_en', 'LIKE', '%'.$request->search.'%')
                                ->orWhere('product_name_bn', 'LIKE'.'%'.$request->search.'%')
                                ->orWhere('product_tags_en', 'LIKE'.'%'.$request->search.'%')
                                ->orWhere('product_tags_bn', 'LIKE'.'%'.$request->search.'%')
                                ->orWhere('product_code', 'LIKE'.'%'.$request->search.'%')
                                ->orWhere('product_color_en', 'LIKE'.'%'.$request->search.'%')
                                ->take(5)->get();
        
        $data['categories'] = Category::orderBy('category_name_en', 'asc')->get();
         return view('frontend.auto_search_product', $data);  
    } 
}
