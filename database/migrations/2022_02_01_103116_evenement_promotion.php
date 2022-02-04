<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EvenementPromotion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evenement_promotion', function (Blueprint $table) {
            $table->date('heure_passage')->format('Y/m/d H:i');
            $table->foreignId('evenement_id')->constrained();
            $table->foreignId('promotion_id')->constrained();
            $table->primary(['evenement_id','promotion_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
