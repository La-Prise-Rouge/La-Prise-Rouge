<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FAQFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'question'=> $this->faker->text(100),
            'reponse'=> $this->faker->text(100),
            'type' => 'Don du Sang'
        ];
    }
}
