<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SkillsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'skillName' => $this->faker->name,
            'percent' => $this->faker->numberBetween(0, 100)
        ];
    }
}
