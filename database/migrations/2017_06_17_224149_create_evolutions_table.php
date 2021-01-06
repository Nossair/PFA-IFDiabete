<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvolutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evolutions',function (Blueprint $table){


           $table->increments('id');
            $table->date('dateConsult');
            $table->time('timeConsult');

           $table->float('poids');
           $table->float('imc');
           $table->float('tdt');
           $table->float('HbA1c');
           $table->string('coma');
           $table->decimal('nbreHMaj');
                    $table->string('resucrage');
                    $table->string('ressentie');
                    $table->string('resucrf');
                    $table->string('resucrC');
                    $table->string('resucrI');
                    $table->decimal('nbEpHmi');
                    $table->decimal('chPBHmi');
            $table->decimal('ratioPetitDej')->nullable();
            $table->decimal('ratioDej')->nullable();
            $table->decimal('ratioColl')->nullable();
            $table->decimal('ratioDinnez')->nullable();
            $table->decimal('IndiceSensibilite')->nullable();
           $table->integer('dossier_id')->unsigned();
           $table->foreign('dossier_id')->references('id')->on('dossiers')->onDelete('cascade');
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
        Schema::drop('evolutions');
    }
}
