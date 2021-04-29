<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Mentor
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
        if(auth()->check() && auth()->user()->role == 'admin' || auth()->check() && auth()->user()->role == 'superadmin' || auth()->check() && auth()->user()->role == 'mentor'){
        // if(auth()->user()->role == 'admin'){
            return $next($request);
        }
        return redirect('404');
        // return $next($request);
    }
}
