<?php

namespace Database\Seeders;

use Database\Seeders\PromotionSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this-> call(PromotionSeeder::class);
        $this-> call(UserSeeder::class);
        $this-> call(EvenementSeeder::class);
        $this-> call(PhotoSeeder::class);
    }
}
