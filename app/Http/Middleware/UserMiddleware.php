<?php

namespace App\Http\Middleware;

use App\Models\User;
use Carbon\Carbon;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class UserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        //user Banned and unbanned
        if(Auth::check() && Auth::user()->is_bann) {
            $banned = Auth::user()->is_bann == '1';
            Auth::logout();
            if($banned == 1) {
                $message = 'Your Account Has Been Banned. Please Contact with Admin';
            }
            return redirect()->route('login')->with('status', $message)->withErrors([
                'banned' => 'Your Account Has Been Banned. Please Contact with Admin'
            ]);
        }

        //user active and inactive
        if(Auth::check()) {
            $expire = Carbon::now()->addSecond(120);
            Cache::put('user_online'. Auth::user()->id, true, $expire );
            User::where('id', Auth::user()->id)->update([
                'last_seen' => Carbon::now()
            ]);
        }

        if (Auth::check() && Auth::user()->role_id == 2) {
            return $next($request);
        } else {
            return redirect()->route('login');
        }
    }
}
