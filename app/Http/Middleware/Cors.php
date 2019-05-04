<?php

namespace App\Http\Middleware;

use Closure;

class Cors
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
        $allowUrl = env('APP_URL', 'unknown');
        return $next($request)
            ->header('Access-Control-Allow-Origin', $allowUrl)
            ->header('Access-Control-Allow-Methods', ['GET', 'POST', 'PUT', 'DELETE'])
            ->header('Access-Control-Allow-Headers', 'X-Requested-With', 'Content-Type', 'X-Token-Auth', 'X-XSRF-TOKEN');
    }
}
