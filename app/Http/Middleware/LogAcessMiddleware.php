<?php

namespace App\Http\Middleware;

use Closure;
use App\LogAcess;

class LogAcessMiddleware
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
        $ip = $request->server->get('REMOTE_ADDR');
        $route = $request->getRequestUri();
        LogAcess::create(['log' => "O IP $ip requisitou a rota $route"]);
        $response = $next($request);
        return $response;
    }
}
