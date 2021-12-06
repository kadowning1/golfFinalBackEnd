<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Team;


class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {
        // Team::factory(10)->create();
        for ($i=1; $i <= 10; $i++) {
            Team::create( [
                'name' => '',
                'user_id' => $i,
            ]);
     }}
}
