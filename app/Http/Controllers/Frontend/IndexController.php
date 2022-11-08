<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\MultiImg;
use App\Models\Product;
use App\Models\Slider;

class IndexController extends Controller
{
    public function index()
    {
        // cache()->set('name', 'mamun');
        // dd(cache()->get('name'));
        // dd(request()->server('HTTP_USER_AGENT'));
        $data['categories'] = Category::orderBy('category_name_en', 'asc')->get();
        $data['sliders']    = Slider::where('status', 1)->orderBy('id', 'desc')->limit(5)->get();
        $data['products']   = Product::where('status', 1)->orderBY('id', 'desc')->get();
        $data['features']   = Product::where('featured', 1)->where('status', 1)->orderBy('id', 'desc')->get();
        $data['hotDeals']   = Product::where('hot_deals', 1)->where('status', 1)->orderBy('id', 'desc')->get();
        $data['specialOffer']   = Product::where('special_offer', 1)->where('status', 1)->orderBy('id', 'desc')->get()->chunk(3);
        $data['specialDeals']   = Product::where('special_deals', 1)->where('status', 1)->orderBy('id', 'desc')->get()->chunk(3);
        $data['brand_skip_0']   = Brand::skip(0)->first();
        $data['brand_products']  = Product::where('status', 1)->where('brand_id', $data['brand_skip_0']->id)->orderBy('id', 'desc')->get();
        $data['category_skip_0'] = Category::skip(0)->first();
        $data['category_products'] = Product::where('status',1)->where('category_id', $data['category_skip_0']->id)->orderBy('id', 'desc')->get();
        // dd($data['specialOffer']);
        return view('frontend.index', $data );
    }
    public function productDetail($id,$slug)
    {
        $data['products'] = Product::findOrFail($id);
        $data['multiImg'] = MultiImg::where('product_id', $id)->latest()->get();
        return view('frontend.product_detail', $data);
    }
    public function tagWiseProduct($tag)
    {
        $data['tagWiseProduct'] = Product::where('status', 1)->where('product_tags_en', $tag)->orWhere('product_tags_bn', $tag)->orderBy('id', 'desc')->get();
        $data['categories'] = Category::orderBy('category_name_en', 'asc')->get();
        return view('frontend.tag_wise_product', $data);
    }
}
