<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/data/{amount}', function ($amount) {
    $response = Http::withHeaders([
        'x-rapidapi-host' => 'free-nba.p.rapidapi.com',
        'x-rapidapi-key' => 'e5d8563997mshcfb030c802400d3p1ec262jsn6864acf2d34a'
    ])->get('https://free-nba.p.rapidapi.com/teams?page=0');

    return collect(json_decode($response))->paginate($amount);
});

