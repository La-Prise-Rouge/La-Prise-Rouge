<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PromotionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'libelle'=> rand(1, 11),
            'annee' => $this->faker-> year(now()),
            'type'=> rand(1, 2)
        ];
    }

    public function run()
    {

    }
}
