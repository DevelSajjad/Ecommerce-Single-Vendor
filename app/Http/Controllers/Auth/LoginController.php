<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Laravel\Socialite\Facades\Socialite;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;
    protected function redirectTo()
    {
        if (Auth()->user()->role_id != 2) {
            return route('admin.dashboard');
        } elseif (Auth()->user()->role_id == 2) {
            return route('user.dashboard');
        }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    // Socialite
    
    public function redirectGoogle()
    {
        return Socialite::driver('google')->redirect();
        
    }

    public function googleCallback()
    {
        $user = Socialite::driver('google')->user();
        $this->loginOrRegister($user);
    }

    protected function loginOrRegister($data)
    {
        dd($data);
        $user = User::where('email', '=', $data->email)->first();
    } 
}
