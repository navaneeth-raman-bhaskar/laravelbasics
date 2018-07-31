<?php

namespace App\Http\Middleware;

use Closure;

class CheckYear
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
        $year = ['1956','1970',"1972"];
        if(in_array($request->year,$year)) {


        return redirect('/');
        }
        return $next($request);
    }
}
