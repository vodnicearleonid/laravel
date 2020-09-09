<?php

namespace app\Http\Middleware;

use Closure;
use phpDocumentor\Reflection\DocBlock\Tags\Param;

class Mymiddleware
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
        //dd($request->route('page'));
        if($request->route('page') != 'pages' and $param == 'admin'){
            return redirect()->route('welcome');
        }
        //echo 'Middle';
        return $next($request);
        //$responce = $next($request);
         //echo ' Middle ';
         //return $responce;
    }
}

/*class Mymiddleware
{
    public function handle($request, Closure $next)
    {
        if ($request->route()->parameter('page') != '123'){
            return redirect()->route('welcome');
        }
        return $next($request);
    }
}*/
