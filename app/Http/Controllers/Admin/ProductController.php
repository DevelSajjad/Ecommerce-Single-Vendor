<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function addProduct(){
        $brands = Brand::orderBy('brand_name_en','asc')->get();
        $categories = Category::orderBy('category_name_en')->get();
        return view('admin.product.add_product',compact('brands','categories'));
    }
}
