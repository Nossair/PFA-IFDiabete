<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('nom');
            $table->string('prenom');
            $table->boolean("archived");
            $table->string('clef');
          //  $table->boolean("archived");
            $table->decimal('ratioPetitDej')->nullable();
            $table->decimal('ratioDej')->nullable();
            $table->decimal('ratioColl')->nullable();
            $table->decimal('ratioDinnez')->nullable();
            $table->decimal('IndiceSensibilite')->nullable();
            $table->decimal('Objectif')->default(1)->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
}
