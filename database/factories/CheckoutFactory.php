<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Book;
use App\Models\User;

class CheckoutFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::all()->random()->id,
            'checked_out' => Book::all()->random()->id,
            'return_date' => $this->faker->dateTimeBetween($startDate='now', $endDate='+1 month', $timezone = null)
        ];
    }
}
