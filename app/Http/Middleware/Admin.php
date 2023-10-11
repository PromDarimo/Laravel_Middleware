<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
       //check if table user colume user_type = admin
        if(Auth()->user()->user_type == "admin"){ //user is table user_type is colume in table 
            return $next($request);
        }
        abort(401);
    }

  
}
