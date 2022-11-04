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
            'slide_image' => 'image|required',
        ]);
        $image = $request->file('slide_image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(166,110)->save('uploads/slider/'.$name_gen);
        $save_url = 'uploads/slider/'.$name_gen;

        Slider::insert([
            'title' => $request->slide_title,
            'description' => $request->slide_desc,
            'image' => $save_url,
        ]);
        return redirect()->back()->with('message', 'Save Slide Successful');
    }
}
