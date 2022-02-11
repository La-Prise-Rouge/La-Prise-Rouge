<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvenementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Evenements', function (Blueprint $table) {
            $table->id();
            $table->string('libelle');
            $table->date('date_debut')->format('Y/m/d');
            $table->date('date_fin')->format('Y/m/d');
            $table->dateTime('date_reunion_primo')->format('Y/m/d h:mm');
            $table->integer('duree_passage');
            $table->string('lieu');
            $table->date('date_inscription')->format('Y/m/d');
            $table->date('date_fin_inscription')->format('Y/m/d');
            $table->tinyInteger('est_cloturer')->default(1);
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
        Schema::dropIfExists('evenements');
    }
}
