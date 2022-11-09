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
    public function productDetail($product_id,$slug)
    {
        $data['products'] = Product::findOrFail($product_id);
        $data['multiImg'] = MultiImg::where('product_id', $product_id)->latest()->get();
        $data['size_en'] = explode(',' , $data['products']->product_size_en);
        $data['size_bn'] = explode(',' , $data['products']->product_size_bn);
        $data['color_en'] = explode(',' , $data['products']->product_color_en);
        $data['color_bn'] = explode(',' , $data['products']->product_color_bn);
        $data['related_products'] = Product::where('status', 1)->where('category_id', $data['products']->category_id)->orderBy('id', 'desc')->get();
        return view('frontend.product_detail', $data);
    }
    public function tagWiseProduct($tag)
    {
        $data['tagWiseProduct'] = Product::where('status', 1)->where('product_tags_en', $tag)->orWhere('product_tags_bn', $tag)->orderBy('id', 'desc')->get();
        $data['categories'] = Category::orderBy('category_name_en', 'asc')->get();
        return view('frontend.tag_wise_product', $data);
    }
    public function subCategoryWiseProduct($id, $slug)
    {
        $data['catgoryWiseProduct'] = Product::where('status', 1)->where('subcategory_id', $id)->orderBy('id', 'desc')->get();
        $data['categories'] = Category::orderBy('category_name_en', 'asc')->get();
        return view('frontend.cat_wise_product', $data);
    }
    public function subSubCategoryWiseProduct($id, $slug)
    {
        $data['subsubcatgoryWiseProduct'] = Product::where('status', 1)->where('subsubcategory_id', $id)->orderBy('id', 'desc')->get();
        $data['categories'] = Category::orderBy('category_name_en', 'asc')->get();
        return view('frontend.subsubcat_wise_product', $data);
    }
}
