<?php

namespace App\Http\Middleware;

use Closure;

class NuevoRegistro
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
        if ($request->has(['nombre','color','peso','longitud','edad','animal_id'])){
            return $next($request);
        }
        return redirect('home');
    }
}
