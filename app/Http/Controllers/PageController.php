<?php

namespace App\Http\Controllers;

use App\Models\Reportable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Yajra\DataTables\DataTables;

class PageController extends Controller
{
    public function index()
    {
        return view('page-2');
    }
    public function getData()
    {
        $response = Http::withHeaders([
            'x-rapidapi-host' => 'free-nba.p.rapidapi.com',
            'x-rapidapi-key' => 'e5d8563997mshcfb030c802400d3p1ec262jsn6864acf2d34a'
        ])->get('https://free-nba.p.rapidapi.com/teams?page=0');

        $response = collect(json_decode($response));

        return collect($response['data'])->paginate(-1);
    }

    public function page3()
    {
        return view('page-3');
    }
}
