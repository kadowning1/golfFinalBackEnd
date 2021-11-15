<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
            'name' => $this->faker->realText($maxNbChars = 20, $indexSize = 2),
            'description' => $this->faker->sentence,
            'publication_year' => (string)$this->faker->year
        ];
    }
}
