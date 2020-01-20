<?php

namespace App\Http\Middleware;

use Closure;

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
        if ($request->user()->role_id != '1') {
            return abort(403, "No access here, sorry!");
        }

        return $next($request);
    }
}
