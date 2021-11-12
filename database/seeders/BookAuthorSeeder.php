<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BookAuthor;

class BookAuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BookAuthor::factory(100)->create();
    }
}
