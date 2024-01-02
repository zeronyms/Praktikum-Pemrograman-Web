<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function getWeather(Request $request)
    {
        $city = $request->input('city');
        $apiKey = config('services.openweather.api_key');
        $response = Http::get("http://api.openweathermap.org/data/2.5/weather?q={$city}&appid={$apiKey}&units=metric");
        $weatherData = $response->json();

        return view('home', compact('weatherData'));
    }
}
