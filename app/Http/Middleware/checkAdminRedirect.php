<?php

namespace App\Http\Middleware;

use Auth;

use Closure;

class checkAdminRedirect
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {   
        if(Auth::check() && Auth::user()->role == 'Admin') {
            return redirect('admin/dashboard');
        }
        else {
            return $next($request);
        }
    }
}
