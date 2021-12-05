<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DeadlineFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'team_id' => $this->faker->randomDigit(),
            'deadline_start' => $this->faker->dateTime(),
            'deadline_end' => $this->faker->dateTime(),
        ];
    }
}
