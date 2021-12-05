<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;
use App\Models\Golfer;

class GolferSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Golfer::factory(10)->create();
        // $response = Http::withHeaders([
        //     'x-rapidapi-host' => 'golf-leaderboard-data.p.rapidapi.com',
        //     'x-rapidapi-key' => '4e3ba61b86mshab04471da6fe79cp136b51jsnb7094541e457'
        // ])->get('https://golf-leaderboard-data.p.rapidapi.com/leaderboard/25');
        // response()->json($response);
        // dd($response->json());

        // create migration
        // create model
        // for loop to save data using eloquent in the db
        // comment it out from your seeders once you have the data - so we dont have duplicates - and so we dont call the api so many times
        // golfer controller that pulls the date from your db into react
    }
}
