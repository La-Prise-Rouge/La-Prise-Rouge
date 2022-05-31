<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use App\Models\Type;

class PromotionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $type = Type::where('libelle', '=', "ADMIN")->first();
        return [
            'annee' => 1970,
            'type' => 1,
            'type_id' => $type->id
        ];
    }

    public function run()
    {

    }
}
