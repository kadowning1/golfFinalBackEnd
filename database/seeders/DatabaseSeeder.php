<?php

namespace Database\Seeders;

use App\Models\BookAuthor;
use App\Models\Role;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(UserRoleSeeder::class);
        $this->call(GroupsSeeder::class);
        $this->call(TeamsSeeder::class);
        $this->call(TeamgroupsSeeder::class);
    }
}
