<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {


        // dd($guard);

        switch ($guard) {
            case 'admin':
                // dd($guard);
                if (Auth::guard($guard)->check()) {
                    return redirect('/admin');
                }
                break;
            
            default:

                if (Auth::guard($guard)->check()) {
                    return redirect('/home');
                }
                break;
        }

        // if (Auth::guard($guard)->check()) {
        //     return redirect('/admin');
        // }
        return $next($request);
    }
}
