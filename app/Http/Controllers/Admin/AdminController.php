<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;


class AdminController extends Controller
{
    public function index(){
        return view('admin.home');
    }
    public function editPage() {
        return view('admin.profile.profile');
    }
    public function adminUpdate(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'email|required',
            'phone' => 'required'
        ]);
        User::findOrFail(Auth::id())->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone
        ]);
        return redirect()->back()->with('message', 'Profile Update Successful ');
    }
    public function showImage(){
        return view('admin.profile.image-update');
    }
    public function adminUpdateImage(Request $request){
        $request->validate([
            'image' => 'image|required|mimes:jpg,png,gif|max:5024'
        ]);
        $oldImage = $request->old_image;

        if(Auth::user()->image === 'fontend/media/h.jpg'){
            $image = $request->file('image');
            $nameGen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(320,240)->save('fontend/media/'.$nameGen);
            $save_url = 'fontend/media/'.$nameGen;
            User::findOrFail(Auth::id())->update([
                'image' => $save_url
            ]);
        }else{
            unlink($oldImage);
            $image = $request->file('image');
            $nameGen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(320,240)->save('fontend/media/'.$nameGen);
            $save_url = 'fontend/media/'.$nameGen;
            User::findOrFail(Auth::id())->update([
                'image' => $save_url
            ]);
        }
        return redirect()->back()->with('message','Image Update Successful');
    }
    public function adminPassword(){
        return view('admin.profile.change-password');
    }
    public function updatePassword(Request $request){
        $request->validate([
            'oldPassword' => 'required',
            'newPassword' => 'required|min:8',
            'confirmPassword' => 'required|min:8',
        ]);
        $oldPass = Auth::user()->password;
        $currentOldPass = $request->oldPassword;
        $newPass = $request->newPassword;
        $confirmPass = $request->confirmPassword;
        if(Hash::check($currentOldPass,$oldPass)){
            if($newPass === $confirmPass){
                User::findOrFail(Auth::id())->update([
                    'password' => Hash::make($newPass)
                ]);
                Auth::logout();
                return redirect()->route('login')->with('message','Change Password Successful');
            }else{
                return redirect()->back()->with('error','New and Confirm Password Not Match');
            }
        }else{
            return redirect()->back()->with('error','Your Old Password Is Incorrect');
        }

    }
}
