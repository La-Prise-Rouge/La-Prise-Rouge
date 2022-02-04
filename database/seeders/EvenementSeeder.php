<?php

namespace Database\Seeders;

use App\Models\Evenement;
use Illuminate\Database\Seeder;

class EvenementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Evenement::factory()->times(10)->create();
    }
}
