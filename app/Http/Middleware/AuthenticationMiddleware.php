<?php

namespace App\Http\Middleware;

use Closure;

class AuthenticationMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $authenticate_method, $profile)
    {
        if (true) {
            return $next($request);
        } else {
            return Response('User do not authenticated!');
        }
        
        
    }
}
