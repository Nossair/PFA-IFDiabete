<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDossiersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
     Schema::create('dossiers', function (Blueprint $table) {

        $table->increments('id');
        $table->integer('patient_id')->unsigned()->nullable();
        $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade');
        $table->date('dateC')->nullable();
        $table->time('timeC')->nullable();
        $table->string('ip');
        $table->string('ed')->nullable();
        $table->decimal('age');
        $table->string('sexe');
        $table->string('tel')->nullable();
        $table->string('addresse')->nullable();
        $table->string('milieuVie')->nullable();
        $table->string('niveauSc')->nullable();
        $table->string('etab')->nullable();
        $table->string('sitMar')->nullable();
        $table->decimal('fraterie')->nullable();
        $table->string('ressourcesFinancieres')->nullable();
        $table->string('mutualiste')->nullable();
        $table->string('organisme')->nullable();
        $table->string('debutDiabete')->nullable();
        $table->integer('dureeDiabete')->nullable();
        $table->string('anciennete')->nullable();
        $table->float('poids')->nullable();
        $table->float('taille')->nullable();
        $table->float('imc')->nullable();
        $table->float('tdt')->nullable();
        $table->string('lypodystrophie')->nullable();
        $table->integer('nbrepisode')->nullable();
        $table->String('episodechiffreBas')->nullable();
        $table->string('ressenti')->nullable();
        $table->string('resucrageFait')->nullable();
        $table->string('resucrageInc')->nullable();
        $table->string('resucrageC')->nullable();
        $table->string('pourquoiresenti')->nullable();
        $table->string('ressucagemajeur')->nullable();
        $table->string('coma')->nullable();
        $table->string('nbrhypogMajr')->nullable();
        $table->string('resucrageGInt')->nullable();
        $table->string('Decompensations')->nullable();
        $table->string('infection')->nullable();
        $table->String('arretTrai')->nullable();
        $table->text('autre')->nullable();
        $table->string('retinopathie')->nullable();
        $table->string('retinopathiestade')->nullable();
        $table->string('nephropathie')->nullable();
        $table->string('nephropathiestade')->nullable();
        $table->string('neuropathie')->nullable();
        $table->string('HTA')->nullable();
        $table->string('ttt')->nullable();
        $table->string('stabilise')->nullable();
        $table->string('coronaropathie')->nullable();
        $table->string('LDL')->nullable();
        $table->string('HDL')->nullable();
        $table->string('TG')->nullable();
        $table->string('ACurique')->nullable();
        $table->String('vitD')->nullable();
        $table->String('chotlt')->nullable();
        $table->String('sensibilite5g')->nullable();
        $table->String('sensibilite10g')->nullable();
        $table->String('sensibilite15g')->nullable();
        $table->String('episodeDerbierAnne')->nullable();
        $table->String('stadeRe')->nullable();
        $table->String('stadeNeph')->nullable();
        $table->text('modeVie')->nullable();
        $table->text('comment')->nullable();
        $table->string('avatar')->default('default.jpg')->nullable();
        $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
        $table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dossiers');
    }
}
