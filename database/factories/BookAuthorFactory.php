<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Author;
use App\Models\Book;

class BookAuthorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        // $books = Book::all();

        return [
           'book_id' => Book::all()->random()->id,
           'author_id' => Author::all()->random()->id
        ];
    }
}
