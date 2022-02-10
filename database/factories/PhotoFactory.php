<?php

namespace Database\Factories;

use App\Models\Evenement;
use Illuminate\Database\Eloquent\Factories\Factory;

class PhotoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'titre'=> $this->faker->text(20),
            'url'=> $this->faker->text(50),
            'description'=> $this->faker->text(50),
            'evenement_id'=> Evenement::inRandomOrder()->first()->id
        ];
    }
}
