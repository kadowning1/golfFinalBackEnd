<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Golfer;
use App\Models\Team;

class TeamGolferFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'golfer_id' => Golfer::all()->random()->id,
            'team_id' => Team::all()->random()->id
        ];
    }
}
