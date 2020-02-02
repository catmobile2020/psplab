<?php

namespace App\Http\Middleware;

use Closure;

class TypeMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$guard)
    {
        if (auth($guard)->check())
        {
            return $next($request);
        }
        return abort(401);
    }
}
