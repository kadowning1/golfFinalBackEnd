<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Group;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        Group::factory(20)->create();
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
