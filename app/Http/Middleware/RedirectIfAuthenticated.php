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
        if (Auth::guard($guard)->check()) {
            if(Auth::user()->role = "Employer"){
                return redirect('/employer/profile');
            } else if(Auth::user()->role = "Employee") {
                return redirect('/employee/profile');
            } else if(Auth::user()->role = "Admin") {
                return redirect('/admin/dashboard');
            }
        }
        return $next($request);
    }
}
