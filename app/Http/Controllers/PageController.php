<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PageController extends Controller
{
    public function page2($amount)
    {
        $response = Http::withHeaders([
            'x-rapidapi-host' => 'free-nba.p.rapidapi.com',
            'x-rapidapi-key' => 'e5d8563997mshcfb030c802400d3p1ec262jsn6864acf2d34a'
        ])->get('https://free-nba.p.rapidapi.com/teams?page=0');

        $responseData = collect(json_decode($response))->paginate($amount);


        return $responseData;
    }
}
