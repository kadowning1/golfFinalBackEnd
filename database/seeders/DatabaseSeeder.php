<?php

namespace Database\Seeders;

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
        $this->call(GroupSeeder::class);
        $this->call(TeamSeeder::class);
        $this->call(UserGroupSeeder::class);

        //need to seed db
        $this->call(GolferSeeder::class);
        $this->call(TeamGolferSeeder::class);
        $this->call(TeamScoreSeeder::class);
        $this->call(DeadlineSeeder::class);

    }
}
