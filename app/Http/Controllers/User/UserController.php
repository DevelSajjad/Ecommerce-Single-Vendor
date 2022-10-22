<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
}
