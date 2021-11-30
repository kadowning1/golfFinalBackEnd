<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TeamGroup;
use App\Models\Group;
use App\Models\Team;

class TeamGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {
        TeamGroup::factory(100)->create();
        // Teamgroups::factory(100)->create();
        //  $users = Groups::all()->toArray();
        //  for ($i=0; $i < count($users); $i++) {
        //      # code...
        //      $role = Teams::all()->random();
        //      $userRole = new Teamgroups();
        //      $userRole->teams_id = $users[$i]['id'];
        //      $userRole->groups_id = $role->id;
        //      $userRole->save();
        //  }
        //  // UserRole::factory(10)->create();
     }
}
