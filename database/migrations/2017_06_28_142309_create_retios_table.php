<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRetiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('retios',function(Blueprint $table){
            $table->increments('id');
            $table->date('dateChanges');
            $table->time('timeChanges');
            $table->decimal('ratioPetitDej')->nullable();
            $table->decimal('ratioDej')->nullable();
            $table->decimal('ratioColl')->nullable();
            $table->decimal('ratioDinnez')->nullable();
                $table->integer('dosier_id')->unsigned();
                $table->foreign('dosier_id')->references('id')->on('dossiers')->onDelete('cascade');
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
        Schema::drop('retios');
    }
}
