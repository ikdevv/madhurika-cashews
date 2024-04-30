<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::user()->role == true) {
            return redirect('/home')->with('status', 'Access Denied. As You Are Not An Admin');
        }
        return $next($request);

        /* Auth::check() is used to determine if the current user is authenticated. It returns true if the user is authenticated and false otherwise.
        Auth::user() returns the currently authenticated user instance. If no user is authenticated, it returns null. */

        /*
        redirect() method to redirect the user to a specific URL. If you want to redirect the user to the '/home'
        route with a flash message, Access Denied. As You Are Not An Admin*/
    }
}
