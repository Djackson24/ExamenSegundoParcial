<?php

namespace App\Http\Middleware;

use Closure;

class Edad
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
        if ($request->age >= 18 && $request->age <=60) {
            return $next($request);
        }
        return redirect('home');

    }
}
