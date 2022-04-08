<?php

namespace Database\Seeders;

use App\Models\Reportable;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;
use Spatie\FlareClient\Report;

class NBASeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $response = Http::withHeaders([
            'x-rapidapi-host' => 'free-nba.p.rapidapi.com',
            'x-rapidapi-key' => 'e5d8563997mshcfb030c802400d3p1ec262jsn6864acf2d34a'
        ])->get('https://free-nba.p.rapidapi.com/teams?page=0');

        $response = json_decode($response);

        foreach($response->data as $item){
         Reportable::create((array)$item);
        }
    }
}
