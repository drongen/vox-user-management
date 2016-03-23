<?php

namespace App\Http\Middleware;

use Closure;

class CanAccessCarList
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($request->user()->hasRole('super-admin')
            || $request->user()->roles->first()->name == 'admin'
            || $request->user()->id == $request->id
        ) {
            return $next($request);
        }

        return redirect('home')->with('error_message', 'You do not have access to that page!');
    }
}
