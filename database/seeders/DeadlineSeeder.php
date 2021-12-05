<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Deadline;

class DeadlineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Deadline::factory(10)->create();
    }
}
