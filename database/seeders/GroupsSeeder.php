<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Groups;

class GroupsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   
    public function run()
    {
        Groups::factory(20)->create();
        // $userRole = [
        //     'SuperUser',
        //     'Librarian',
        //     'Cardholder'
        // ];

        // for ($i = 0; $i < count($userRole); $i++) {
        //     $role = new Groups;
        //     $role->name = $userRole[$i];
        //     $role->save();
        //     # code...
        // }
    }
}
