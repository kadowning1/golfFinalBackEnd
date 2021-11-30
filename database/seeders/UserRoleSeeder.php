<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UserRole;
use App\Models\Role;
use App\Models\User;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all()->toArray();
        for ($i=0; $i < count($users); $i++) {
            # code...
            $role = Role::all()->random();
            $userRole = new UserRole();
            $userRole->user_id = $users[$i]['id'];
            $userRole->role_id = $role->id;
            $userRole->save();
        }
        // UserRole::factory(10)->create();
    }
}