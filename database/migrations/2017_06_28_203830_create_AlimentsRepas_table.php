<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlimentsRepasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('AlimentsReaps',function (Blueprint $table){
            $table->increments('id');
            $table->decimal('PetitDejA');
            $table->decimal('DejA');
            $table->decimal('CollA');
            $table->decimal('DinnezA');
            $table->integer('dossierA_id')->unsigned();
            $table->foreign('dossierA_id')->references('id')->on('dossiers')->onDelete('cascade');
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
        Schema::drop('AlimentsReaps');
    }
}
