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
            'url'=> $this->faker->text(100),
            'evenement_id'=> Evenement::inRandomOrder()->first()->id
        ];
    }
}
