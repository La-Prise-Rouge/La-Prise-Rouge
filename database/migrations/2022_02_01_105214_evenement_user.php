<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EvenementUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evenement_user', function (Blueprint $table) {
            $table->date('heure_passage')->format('Y/m/d H:i');
            $table->tinyInteger('est_passe')->default(0);
            $table->foreignId('evenement_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->primary(['evenement_id','user_id']);
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