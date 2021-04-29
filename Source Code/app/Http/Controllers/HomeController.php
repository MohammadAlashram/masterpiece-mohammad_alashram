<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
// use App\Http\Controllers\OpenWeather;
use Dnsimmons\OpenWeather\OpenWeather;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        // $this->middleware(['auth','verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $weather = new OpenWeather();
        // $current = $weather->getCurrentWeatherByCityName('amman');
        // print_r($current);
      
        // $data = Http::get('http://api.openweathermap.org/data/2.5/weather?q=amman&appid=75d208bc7b7215e3ea7ea5032727df5e')->json();
        // $data = Http::get('https://weather.ls.hereapi.com/weather/1.0/report.json?product=forecast_7days_simple&name=Amman&apiKey=A3Opw3vILUC9IH9yU4p0j9J8LiZUhWOCF1O0MQ4N-kU')->json();
        // print_r($data);  
        return view('home');
    }
}
