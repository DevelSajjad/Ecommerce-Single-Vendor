<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Image;
class UserController extends Controller
{
    public function index(){
        return view('user.home');
    }

    public function updateProfile(Request $request) {

        $a = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required'
        ]);


        User::findOrFail(Auth::id())->update([
            'name' =>$request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'updated_at' => Carbon::now()
        ]);
        return redirect()->back()->with('message','Profile Update Successful');

        // $a = $request->validate([
        //     'name' => 'required',
        //     'email' => 'required|email',
        //     'phone' => 'required'
        // ]);

        // Auth::user()->update($a + ['updated_at' => Carbon::now()]);
        // return redirect()->back();
    }

    public function userImage(){
        return view('user.userimage');
    }

    public function updateImage(Request $request){
        $request->validate([
            'image' => 'required|image|mimes:jpg,png,gif|max:5024'
        ]);
        $old_image = $request->old_image;
        if(Auth::user()->image == 'fontend/media/h.jpg'){
           $image = $request->file('image');
           $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
           Image::make($image)->resize(320, 240)->save('fontend/media/'.$name_gen);
            $save_url = 'fontend/media/'.$name_gen;

            User::findOrFail(Auth::id())->update([
                'image' => $save_url
            ]);
        }else{
            unlink($old_image);
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(320, 240)->save('fontend/media/'.$name_gen);
            $save_url = 'fontend/media/'.$name_gen;
            User::findOrFail(Auth::id())->update([
                'image' => $save_url
            ]);
        }
        return redirect()->back()->with('message','Image Update Successful');
    }
    public function updatePasswordPage(){
        return view('user.password');
    }
    public function changePassword(Request $request){
        $request->validate([
            'oldPassword' => 'required',
            'newPassword' => 'required',
            'confirmPassword' => 'required',
        ]);
        $oldPass = Auth::user()->password;
        $currentOld = $request->oldPassword;
        $newPass = $request->newPassword;
        $confirmPass = $request->confirmPassword;
        if(Hash::check($currentOld,$oldPass)){
            if($newPass === $confirmPass){
                User::findOrFail(Auth::id())->update([
                    'password' => Hash::make($newPass)
                ]);
            }else{
                return redirect()->back()->with('error','New Password and Confirm Password Not Match');
            }
        }else{
            return redirect()->back()->with('error','Enter Your Correct Old Password');
        }
        return redirect()->back()->with('message','Password Change Successful');
    }
}
