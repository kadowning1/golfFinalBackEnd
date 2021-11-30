<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Group;
use App\Models\Team;

class TeamGroupFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'group_id' => Group::all()->random()->id,
            'team_id' => Team::all()->random()->id
         ];
    }
}
