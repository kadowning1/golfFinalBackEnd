<?php

namespace Database\Seeders;

use App\Models\UserGroup;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Group;


class UserGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $golfers = User::all()->toArray();
        for ($i = 0; $i < count($golfers); $i++) {
            # code...
            $team = Group::all()->random();
            $teamGolfer = new UserGroup();
            $teamGolfer->golfer_id = $golfers[$i]['id'];
            $teamGolfer->team_id = $team->id;
            $teamGolfer->save();
        }
    }
}
