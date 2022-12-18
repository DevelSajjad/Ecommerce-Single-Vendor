<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

        if (Auth::check() && Auth::user()->role_id == 2) {
            return $next($request);
        } else {
            return redirect()->route('login');
        }
    }
}
