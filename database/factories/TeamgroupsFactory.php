<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Groups;
use App\Models\Teams;

class TeamgroupsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'groups_id' => Groups::all()->random()->id,
            'teams_id' => Teams::all()->random()->id
         ];
    }
}