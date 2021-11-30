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
        Team::factory(20)->create();
        //  $userRole = [
        //      'SuperUser',
        //      'Librarian',
        //      'Cardholder'
        //  ];

        //  for ($i = 0; $i < count($userRole); $i++) {
        //      $role = new Teams;
        //      $role->name = $userRole[$i];
        //      $role->save();
        //      # code...
        //  }
     }
}
