<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PartenaireFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'libelle'=> $this->faker->text(100),
            'lien'=> $this->faker->text(100),
            'description'=> $this->faker->text(100)
        ];
    }
}
