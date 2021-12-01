<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;

class GolferSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $response = Http::withHeaders([
            'x-rapidapi-host' => 'golf-leaderboard-data.p.rapidapi.com',
            'x-rapidapi-key' => '4e3ba61b86mshab04471da6fe79cp136b51jsnb7094541e457'
        ])->get('https://golf-leaderboard-data.p.rapidapi.com/leaderboard/25');
        // response()->json($response);
        dd($response->json());
    }
}
