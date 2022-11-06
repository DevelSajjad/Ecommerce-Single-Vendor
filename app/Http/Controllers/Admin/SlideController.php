<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class SlideController extends Controller
{
    public function showSlide()
    {
        $slider = Slider::latest()->get();
        return view('admin.slider.slide',compact('slider'));
    }
    public function saveSlide(Request $request)
    {
        $request->validate([
            'slide_image' => 'image|required|mimes:jpeg,jpg,png,gif|max:5024',
        ]);
        $image = $request->file('slide_image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(1000,500)->save('uploads/slider/'.$name_gen);
        $save_url = 'uploads/slider/'.$name_gen;

        Slider::insert([
            'title_en' => $request->slide_title_en,
            'title_bn' => $request->slide_title_bn,
            'description_en' => $request->slide_desc_en,
            'description_bn' => $request->slide_desc_en,
            'image' => $save_url,
        ]);
        return redirect()->back()->with('message', 'Save Slide Successful');
    }
    public function slideEdit($id)
    {
        $slide = Slider::findOrFail($id);
        return view('admin.slider.slide-edit',compact('slide'));
    }
    public function slideUpdate(Request $request)
    {
        $slide_id = $request->slide_id;
        $old_img = $request->old_image;
        if($request->file('slide_image')){
            unlink($old_img);
            $image = $request->file('slide_image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(1000,500)->save('uploads/slider/'.$name_gen);
            $save_url = 'uploads/slider/'.$name_gen;
            Slider::findOrFail($slide_id)->update([
                'title_en' => $request->slide_title_en,
                'title_bn' => $request->slide_title_bn,
                'description_en' => $request->slide_desc_en,
                'description_bn' => $request->slide_desc_en,
                'image' => $save_url,
            ]);
            return redirect()->route('slider')->with('message', 'Slide Update Successful');
        }else {
            Slider::findOrFail($slide_id)->update([
                'title_en' => $request->slide_title_en,
                'title_bn' => $request->slide_title_bn,
                'description_en' => $request->slide_desc_en,
                'description_bn' => $request->slide_desc_en,
            ]);
            return redirect()->route('slider')->with('message', 'Slide Update Successful');   
        }
    }
    public function slideDelete($id)
    {
        Slider::findOrFail($id)->delete();
        return redirect()->back->with('message', 'Slide Delete Successful'); 
    }
    public function statusInactive($id)
    {
        Slider::findOrFail($id)->update([
            'status' => 0
        ]);
        return redirect()->back()->with('message','Slider Deactivate');
    }
    public function statusActive($id)
    {
        Slider::findOrFail($id)->update([
            'status' => 1
        ]);
        return redirect()->back()->with('message','Slider Activate');
    }
}
