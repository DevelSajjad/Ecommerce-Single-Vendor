<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\MultiImg;
use App\Models\Product;
use App\Models\Subsubcategory;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ProductController extends Controller
{
    public function addProduct()
    {
        $brands = Brand::orderBy('brand_name_en', 'asc')->get();
        $categories = Category::orderBy('category_name_en')->get();
        return view('admin.product.add_product', compact('brands','categories'));
    }
    public function getSubSubCat($subid)
    {
        $id = Subsubcategory::where('subcategory_id', $subid)->orderBy('subsubcategory_name_en','asc')->get();
        return json_encode($id);
    }
    public function storeProduct(Request $request) 
    {
        $image = $request->file('product_thambnail');
       $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
       Image::make($image)->resize(300,300)->save('uploads/thumb/'.$name_gen);
       $save_url = 'uploads/thumb/'.$name_gen;

       $request->validate([
        'brand_id' => 'required',
        'category_id' => 'required',
        'subcategory_id' => 'required',
        'subsubcategory_id' => 'required',
        'product_name_en' => 'required',
        'product_name_bn' => 'required',
        'product_code' => 'required',
        'product_qty' => 'required',
        'product_tags_en' => 'required',
        'product_tags_bn' => 'required',
        'product_size_en' => 'required',
        'product_size_bn' => 'required',
        'product_color_en' => 'required',
        'product_color_bn' => 'required',
        'selling_price' => 'required',
        'discount_price' => 'required',
        'product_thambnail' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:7048',
        // 'multi_img' => 'image|required',
        'short_descp_en' => 'required',
        'short_descp_bn' => 'required',
        'long_descp_en' => 'required',
        'long_descp_bn' => 'required',
       ]);
       
      $product_id = Product::insertGetId([
        'brand_id' => $request->brand_id,
        'category_id' => $request->category_id,
        'subcategory_id' => $request->subcategory_id,
        'subsubcategory_id' => $request->subsubcategory_id,
        'product_name_en' => $request->product_name_en,
        'product_name_bn' => $request->product_name_bn,
        'product_slug_en' => strtolower(str_replace('','-',$request->product_name_en)),
        'product_slug_bn' => str_replace('','-',$request->product_name_bn),
        'product_tags_en' => $request->product_tags_en,
        'product_tags_bn' => $request->product_tags_bn,
        'product_code' => $request->product_code,
        'product_qty' => $request->product_qty,
        'product_size_en' => $request->product_size_en,
        'product_size_bn' => $request->product_size_bn,
        'product_color_en' => $request->product_color_en,
        'product_color_bn' => $request->product_color_bn,
        'selling_price' => $request->selling_price,
        'discount_price' => $request->discount_price,
        'product_thumbnail' => $save_url,
        'short_descp_en' => $request->short_descp_en,
        'short_descp_bn' => $request->short_descp_bn,
        'long_descp_en' => $request->long_descp_en,
        'long_descp_bn' => $request->long_descp_bn,
        'hot_deals' => $request->hot_deals,
        'featured' => $request->featured,
        'special_offer' => $request->special_offer,
        'special_deals' => $request->special_deals,
        'status'    => 1,
        'created_at' => Carbon::now(),
       ]);

       //////////////////Multi Image////////////////////
       $multi_image = $request->file('multi_img');
       foreach ($multi_image as $img ) {
        $name_mult_gen = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
        Image::make($img)->resize(917,1000)->save('uploads/multiImg/'.$name_mult_gen);
        $save_multi_url = 'uploads/multiImg/'.$name_mult_gen;
        MultiImg::insert([
            'product_id' => $product_id,
            'photo_name' => $save_multi_url,
            'created_at' => Carbon::now(),
        ]);
       }
       return redirect()->back()->with('message', 'Product Add Successful');
    }
    public function manageProduct()
    {
        $product = Product::latest()->get();
        return view('admin.product.manage', compact('product'));
    }
    public function editProduct($product_id)
    {
        $product = Product::findOrFail($product_id);
        $brand = Brand::latest()->get();
        $category = Category::latest()->get();
        $multiImg = MultiImg::where('product_id',$product_id)->latest()->get();
        return view('admin.product.product_edit',compact('product', 'brand', 'category','multiImg'));
    }
    public function updateProduct(Request $request)
    {
        $product_id  = $request->product_id;
        
        $request->validate([
            'brand_id' => 'required',
            'category_id' => 'required',
            'subcategory_id' => 'required',
            'subsubcategory_id' => 'required',
            'product_name_en' => 'required',
            'product_name_bn' => 'required',
            'product_code' => 'required',
            'product_qty' => 'required',
            'product_tags_en' => 'required',
            'product_tags_bn' => 'required',
            'product_size_en' => 'required',
            'product_size_bn' => 'required',
            'product_color_en' => 'required',
            'product_color_bn' => 'required',
            'selling_price' => 'required',
            'discount_price' => 'required',
            // 'product_thambnail' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:7048',
            // 'multi_img' => 'image|required',
            'short_descp_en' => 'required',
            'short_descp_bn' => 'required',
            'long_descp_en' => 'required',
            'long_descp_bn' => 'required',
           ]);
           
           Product::findOrFail($product_id)->update([
            'brand_id' => $request->brand_id,
            'category_id' => $request->category_id,
            'subcategory_id' => $request->subcategory_id,
            'subsubcategory_id' => $request->subsubcategory_id,
            'product_name_en' => $request->product_name_en,
            'product_name_bn' => $request->product_name_bn,
            'product_slug_en' => strtolower(str_replace('','-',$request->product_name_en)),
            'product_slu
            g_bn' => str_replace('','-',$request->product_name_bn),
            'product_tags_en' => $request->product_tags_en,
            'product_tags_bn' => $request->product_tags_bn,
            'product_code' => $request->product_code,
            'product_qty' => $request->product_qty,
            'product_size_en' => $request->product_size_en,
            'product_size_bn' => $request->product_size_bn,
            'product_color_en' => $request->product_color_en,
            'product_color_bn' => $request->product_color_bn,
            'selling_price' => $request->selling_price,
            'discount_price' => $request->discount_price,
            'short_descp_en' => $request->short_descp_en,
            'short_descp_bn' => $request->short_descp_bn,
            'long_descp_en' => $request->long_descp_en,
            'long_descp_bn' => $request->long_descp_bn,
            'hot_deals' => $request->hot_deals,
            'featured' => $request->featured,
            'special_offer' => $request->special_offer,
            'special_deals' => $request->special_deals,
            'status'    => 1,
            'updated_at' => Carbon::now(),
           ]);

           return redirect()->route('manage-product')->with('message','Product Update Successful');
    }
    public function deleteMultiImage($id)
    {
       $img = MultiImg::findOrFail($id);
        unlink($img->photo_name);
        $img->delete();
        return redirect()->back();
    }
    public function multiImageUpdate(Request $request)
    {
        $image = $request->file('multi_img');
        foreach ($image as $key => $img) {
            $id = MultiImg::findOrFail($key);
            unlink($id->photo_name);
            $name_mult_gen = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
            Image::make($img)->resize(917,1000)->save('uploads/multiImg/'.$name_mult_gen);
            $save_multi_url = 'uploads/multiImg/'.$name_mult_gen;
            MultiImg::where('id',$key)->update([
                'photo_name' => $save_multi_url,
            ]);
        }
        return redirect()->back()->with('message','Multi Image Update Successful');
    }

    public function thumbImageUpdate(Request $request)
    {
        $proId = $request->pro_id;
        $oldImg =$request->old_img;
        unlink($oldImg);
        $image = $request->file('thumb_img');
       $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
       Image::make($image)->resize(300,300)->save('uploads/thumb/'.$name_gen);
       $save_url = 'uploads/thumb/'.$name_gen;
        Product::findOrFail($proId)->update([
            'product_thumbnail' => $save_url
        ]);
        return redirect()->back()->with('message','Image Thumbnail Successful');
    }
    public function statusInactive($id)
    {
        Product::findOrFail($id)->update([
            'status' => 0
        ]);
        return redirect()->back();
    }
    public function statusActive($id)
    {
        Product::findOrFail($id)->update([
            'status' => 1
        ]);
        return redirect()->back();
    }
}
