<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;

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
            'libelle'=> $this->faker->word(),
            'annee' => $this->faker-> year(now()),
            'type'=> rand(1, 2)
        ];
    }

    public function run()
    {

    }
}
