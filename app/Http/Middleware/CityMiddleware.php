<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class CityMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        /*$parsed_url = parse_url($request->url());
        $path = $parsed_url['path'];
        $city_slug = explode('/', $path)[1];

        Session::put('city', $city_slug);*/

        return $next($request);
    }
}
