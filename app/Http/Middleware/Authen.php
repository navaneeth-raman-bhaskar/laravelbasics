<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Authen
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $param)
    {
       // dd($request->user);//this will return the input URI
        echo "<b style='color:blue'>role: </b>".$param."<br>";
        return $next($request);
    }
}
