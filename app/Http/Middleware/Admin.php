<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Admin
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
//        dd($request->user()->roles->first()->name);
        if ($request->user()->roles->first()->name == 'super_admin' || $request->user()->roles->first()->name == 'admin') {
            return $next($request);
        }
        
        return redirect('/home');

    }
}
