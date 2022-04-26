<?php

namespace Database\Seeders;

use Database\Seeders\PromotionSeeder;
use Database\Seeders\TypeSeeder;
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
        $this-> call(TypeSeeder::class);
        $this-> call(PromotionSeeder::class);
        $this-> call(UserSeeder::class);
        // $this-> call(EvenementSeeder::class);
        // $this-> call(PhotoSeeder::class);
        // $this-> call(EvenementUserSeeder::class);
        // $this-> call(EvenementPromotionSeeder::class);
        // $this-> call(PartenaireSeeder::class);
        // $this-> call(FAQsSeeder::class);
    }
}
