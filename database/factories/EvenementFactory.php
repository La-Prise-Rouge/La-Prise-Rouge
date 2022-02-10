<?php

namespace Database\Factories;

use Carbon\Carbon;
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
        $date_even = $this->faker->date('Y/m/d h:i');
        $date_deb_even = $this->faker->date('Y/m/d');
        $date_fin_even = $this->faker->date('Y/m/d');
        $date_deb_inscr = $this->faker->date('Y/m/d');
        $date_fin_inscr = $this->faker->date('Y/m/d');
        $date_primo = $this->faker->date('Y/m/d h:i');

        return [
            'libelle'=> $this->faker->text(100),
            'date_debut'=>$date_deb_even,
            'date_fin'=>$date_fin_even,
            'date_reunion_primo'=>$date_primo,
            'duree_passage'=>15,
            'lieu'=> $this->faker->city(),
            'date_inscription'=>$date_deb_inscr,
            'date_fin_inscription'=>$date_fin_inscr
        ];
    }

    public function run()
    {

    }
}
