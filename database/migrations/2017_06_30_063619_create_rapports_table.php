<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRapportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rapports', function (Blueprint $table) {

	        $table->decimal('glucoAvPetitDej');
            $table->decimal('glucoAfPetitDej');
            $table->decimal('insPetitDej');
            $table->decimal('insAPetitDej');

	        $table->decimal('glucoAvDej');
            $table->decimal('glucoAfDej');
            $table->decimal('insDej');
            $table->decimal('insADej');
		
	        $table->decimal('glucoAvColl');
            $table->decimal('glucoAfColl');
            $table->decimal('insColl');
            $table->decimal('insAColl');

	        $table->decimal('glucoAvDin');
            $table->decimal('glucoAfDin');
            $table->decimal('insDin');
            $table->decimal('insADin');

            $table->integer('dossier_id')->unsigned();
            $table->foreign('dossier_id')->references('id')->on('dossiers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rapports');
    }
}
