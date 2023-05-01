<?php

namespace App\Http\Middleware;

use App\Models\City;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class CityMiddleware
{
    /**
     * @param Request $request
     * @param Closure $next
     * @return Response
     */
    public function handle(Request $request, Closure $next): Response
    {
        $parsed_url = parse_url($request->url());
        $is_exist_city_in_url = array_key_exists('path', $parsed_url);
        $city_from_session = Session::get('city');

        if(!$is_exist_city_in_url && $city_from_session) {

            return redirect("/$city_from_session", 302);

        }

        elseif($is_exist_city_in_url){

            $path = $parsed_url['path'];
            $city_slug = explode('/', $path)[1];

            if(!City::query()->where('slug', $city_slug)->count())
                return response()->view('errors.city_not_found', [],400);

            Session::put('city', $city_slug);

        }

        return $next($request);
    }

}
