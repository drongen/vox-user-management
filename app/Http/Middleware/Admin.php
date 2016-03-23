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
        if ($request->user()->hasRole('super-admin') || $request->user()->roles->first()->name == 'admin') {
            return $next($request);
        }
        
        return redirect('home')->with('error_message', 'You do not have access to that page!');

    }
}
