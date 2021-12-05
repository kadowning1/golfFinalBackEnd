<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TeamScoreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'datetime' => $this->faker->dateTime(),
            'score' => $this->faker->randomDigit(),
            'team_id' => $this->faker->randomDigit(),
        ];
    }
}