<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class checkEmployer
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
        if(Auth::check() && Auth::user()->role == 'Employer') {
            return $next($request);
        }
        else {
            return redirect('home');
        }
    }
}
