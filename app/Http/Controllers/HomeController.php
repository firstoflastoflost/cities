<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function index()
    {
        $city_slug = Session::get('city') ?? "";
        $cities = City::all();
        return view('home', ['cities' => $cities, 'selected_city' => $city_slug]);
    }
}
