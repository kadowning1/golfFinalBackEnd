<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Golfer;
use App\Models\Team;
use App\Models\TeamGolfer;

class TeamGolferSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $golfers = Golfer::all()->toArray();
        for ($i=0; $i < count($golfers); $i++) {
            # code...
            $team = Team::all()->random();
            $teamGolfer = new TeamGolfer;
            $teamGolfer->golfer_id = $golfers[$i]['id'];
            $teamGolfer->team_id = $team->id;
            $teamGolfer->save();
        }
    }
}
