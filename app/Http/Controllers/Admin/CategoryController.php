<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Subcategory;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Laravel\Ui\Presets\React;

class CategoryController extends Controller
{
    public function categoryView(){
        $category = Category::latest()->get();
        return view('admin.category.category',compact('category'));
    }
    public function addCategory(Request $request){
        $request->validate([
            'category_name_icon' => 'required',
            'category_name_en'   => 'required', 
            'category_name_bn'   => 'required', 
        ]);
        Category::insert([
            'category_icon'     => $request->category_name_icon,
            'category_name_en'  => $request->category_name_en,
            'category_name_bn'  => $request->category_name_bn,
            'category_slug_en'  => strtolower(str_replace('','-',$request->category_name_en)),
            'category_slug_bn'  => str_replace('','-',$request->category_name_bn),
            'created_at'        => Carbon::now()
        ]);
        return redirect()->back()->with('message','Add Category Successful');
    }
    public function deleteCat($catId){
        Category::findOrFail($catId)->delete();
        return redirect()->back()->with('error','Category Delete Successful');
    }
    public function editShow($editId){
        $cat = Category::findOrFail($editId);
        return view('admin.category.edit_category',compact('cat'));
    }
    public function updateCat(Request $request){
        $catId = $request->cat_id;
        $request->validate([
            'category_name_icon' => 'required',
            'category_name_en'   => 'required', 
            'category_name_bn'   => 'required',
        ]);
        Category::findOrFail($catId)->update([
            'category_icon'     => $request->category_name_icon,
            'category_name_en'  => $request->category_name_en,
            'category_name_bn'  => $request->category_name_bn,
            'category_slug_en'  => strtolower(str_replace('','-',$request->category_name_en)),
            'category_slug_bn'  => str_replace('','-',$request->category_name_bn),
            'updated_at'        => Carbon::now()
        ]);
        return redirect()->route('category')->with('message','Category Update Successful');
    }
    // **************************Sub Category Controller**********************
    public function subCategory(){
        $category = Category::orderBY('category_name_en')->get();
        $subcat   = Subcategory::latest()->get();
        return view('admin.subcategory.subcategory',compact('category','subcat'));
    }
    public function addSubcategory(Request $request){
        $request->validate([
            'category_id' => 'required',
            'subcategory_name_bn' => 'required',
            'subcategory_name_en' => 'required',
        ],
        [   
            'category_id.required' => 'Must Select Your Category',
            'subcategory_name_en.required' => "Sub Category English Name Must Be Required",
            'subcategory_name_bn.required' => "Sub Category Bangla Name Must Be Required",
        ]);
        Subcategory::insert([
            'category_id'           => $request->category_id,
            'subcategory_name_en'   => $request->subcategory_name_en,
            'subcategory_name_bn'   => $request->subcategory_name_bn,
            'subcategory_slug_en'   => strtolower(str_replace('','-',$request->subcategory_name_en)),
            'subcategory_slug_bn'   => str_replace('','-',$request->subcategory_name_bn),
            'created_at'            => Carbon::now(),
        ]);
        return redirect()->back()->with('message','Add Subcategory Successful');
    }
    public function subEditShow($subId){
       $subcate = Subcategory::findOrFail($subId);
       $category = Category::latest()->get();
        return view('admin.subcategory.editSub',compact('subcate','category'));
    }
    public function updateSubcategory(Request $request){
        $subId = $request->subcatId;
        $request->validate([
            'category_id' => 'required',
            'subcategory_name_bn' => 'required',
            'subcategory_name_en' => 'required',
        ],
        [   
            'category_id.required' => 'Must Select Your Category',
            'subcategory_name_en.required' => "Sub Category English Name Must Be Required",
            'subcategory_name_bn.required' => "Sub Category Bangla Name Must Be Required",
        ]);

        Subcategory::findOrFail($subId)->update([
            'category_id'           => $request->category_id,
            'subcategory_name_en'   => $request->subcategory_name_en,
            'subcategory_name_bn'   => $request->subcategory_name_bn,
            'subcategory_slug_en'   => strtolower(str_replace('','-',$request->subcategory_name_en)),
            'subcategory_slug_bn'   => str_replace('','-',$request->subcategory_name_bn),
            'updated_at'            => Carbon::now(),
        ]);
        return redirect()->route('sub-category')->with('message','Subcategory Update Successful');
    }
    public function deleteSub($did){
        Subcategory::findOrFail($did)->delete();
        return redirect()->back()->with('message','Subcategory Delete Successful');
    }
}
