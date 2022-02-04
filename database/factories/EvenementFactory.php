<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EvenementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $date_even = $this->faker->date('Y/m/d');
        return [
            'libelle'=> $this->faker->text(100),
            'date_debut'=>$date_even,
            'date_fin'=>$date_even,
            'date_reunion_primo'=>$this->faker->date('Y/m/d', $date_even),
            'lieu'=> $this->faker->city(),
            'date_inscription'=>$this->faker->date('Y/m/d', $date_even),
            'date_fin_inscription'=>$this->faker->date('Y/m/d', $date_even)
        ];
    }

    public function run()
    {

    }
}
