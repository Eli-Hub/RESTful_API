<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PetitionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
           'title' => $this->faker->word,
           'category' => $this->faker->text(50),
           'description' => $this->faker->text(200),
           'author' => $this->faker->name,
           'signees' => $this->faker->numberBetween(1, 100000)
        ];
    }
}
