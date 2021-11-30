<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Teams;

class TeamsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {
        Teams::factory(20)->create();
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
