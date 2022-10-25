<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class BrandController extends Controller
{
    public function brands(){
        $brand = Brand::latest()->get();
        return view('admin.brand.brand',compact('brand'));
    }
    public function addBrand(Request $request){
        $request->validate([
            
               'brand_name_en' => 'required',
                'brand_name_bn' => 'required',
                'brand_image' => 'required|image|mimes:jpg,png,gif|max:5024',
        ],
        [
            
            'brand_name_en.required' => 'Must Insert English Brand Name',
            'brand_name_bn.required' => 'Must Insert Bangla Brand Name'
            
        ]);
        $image = $request->file('brand_image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(300,300)->save('uploads/brand/'.$name_gen);
        $save_url = 'uploads/brand/'.$name_gen;
        Brand::insert([
            'brand_name_en' => $request->brand_name_en,
            'brand_name_bn' => $request->brand_name_bn,
            'brand_slug_en' => strtolower(str_replace('','-',$request->brand_name_en)),
            'brand_slug_bn' => str_replace('','-',$request->brand_name_bn),
            'brand_image'   => $save_url,
        ]);
        return redirect()->back()->with('message','Add Brand Successful');
    }
    public function edit($brand_id){
        $brand = Brand::findOrFail($brand_id);
        return view('admin.brand.edit',compact('brand'));
    }
    public function brandUpdate(Request $request){
        $id = $request->brand_id;
        $oldImage = $request->old_image;
        $request->validate([
                'brand_name_en' => 'required',
                'brand_name_bn' => 'required',
        ],
        [
            
                'brand_name_en.required' => 'Must Insert English Brand Name',
                'brand_name_bn.required' => 'Must Insert Bangla Brand Name'
        ]);

        if($request->file('brand_image')){
            unlink($oldImage);
            $image = $request->file('brand_image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(300,300)->save('uploads/brand/'.$name_gen);
            $save_url = 'uploads/brand/'.$name_gen;
           Brand::findOrFail($id)->update([
            'brand_name_en' => $request->brand_name_en,
            'brand_name_bn' => $request->brand_name_bn,
            'brand_slug_en' => strtolower(str_replace('','-',$request->brand_name_en)),
            'brand_slug_bn' => str_replace('','-',$request->brand_name_bn),
            'brand_image'   => $save_url,
            'updated_at'    => Carbon::now(),
           ]);
        }else{
            Brand::findOrFail($id)->update([
                'brand_name_en' => $request->brand_name_en,
                'brand_name_bn' => $request->brand_name_bn,
                'brand_slug_en' => strtolower(str_replace('','-',$request->brand_name_en)),
                'brand_slug_bn' => str_replace('','-',$request->brand_name_bn),
                'updated_at'    => Carbon::now(),
            ]);
        }
        return redirect()->route('brands')->with('message', 'Brand Update Successful');
    }
    public function brandDelete($delete_id){
        $brand = Brand::findOrFail($delete_id);
        if($brand){
            unlink($brand->brand_image);
            $brand->delete();
            return redirect()->back()->with('message','Brand Delete Successful');
        }
    }
}
