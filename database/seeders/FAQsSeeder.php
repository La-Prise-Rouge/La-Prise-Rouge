<?php

namespace Database\Seeders;

use App\Models\FAQ;
use Database\Factories\FAQsFactory;
use Illuminate\Database\Seeder;

class FAQsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FAQ::factory()->times(20)->create();
    }
}
