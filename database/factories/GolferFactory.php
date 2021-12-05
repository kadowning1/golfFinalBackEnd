<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class GolferFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'score' => $this->faker->randomDigit(),
            'country' => $this->faker->country(),
            'position' => $this->faker->randomDigit(),
            'total_to_par' => $this->faker->randomDigit()
        ];
    }
}
