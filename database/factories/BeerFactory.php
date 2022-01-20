<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BeerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'                  => $this->faker->name(),
            'type'                  => $this->faker->name(),
            'alcohol_percentage'    => $this->faker->numberBetween($min = 1, $max = 67.5),
            'year'                  => $this->faker->numberBetween($min = 1478, $max = 2021),
            'country'               => $this->faker->country(),
        ];
    }
}
