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
        for ($i=1; $i <= 10; $i++) {
            Group::create( [
                'name' => '',
                'user_id' => $i,
            ]);
     }}
}
