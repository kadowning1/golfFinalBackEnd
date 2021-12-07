<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TeamScore;

class TeamScoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TeamScore::factory(10)->create();
    }
}
