<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePromotionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Promotions', function (Blueprint $table) {
            $table->id();
            $table->enum('libelle',[
                'SIO',
                'ASI',
                'FED',
                'AM',
                'CGO',
                'PMI',
                'SP3S',
                'NRC',
                'TC',
                'CI',
                'DCG'
            ]);
            $table->string('annee');
            $table->enum('type',[
                'Alternance',
                'Continue',
            ]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('promotions');
    }
}
