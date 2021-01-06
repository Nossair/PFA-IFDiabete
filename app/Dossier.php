<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dossier extends Model
    {
    protected $table = "dossiers";

    public function evolutions()
        {
    return $this->hasMany('App\Evolution', 'dossier_id');
        }
    public function retios(){
    	return $this->hasMany('App\Retios', 'dosier_id');
    }
    public function glycos(){
        return $this->hasMany('App\GlycQuatreH', 'dossierG_id');
    }
    public function alims(){
        return $this->hasMany('App\AlimentsRepas', 'dossierA_id');
    }


    public function rapports (){
        return $this->hasMany('App\Rapport','dossier_id');
    }
     public function patient()
    {
        return $this->belongsTo('App\Patient','patient_id');
    }

    public $timestamps = true;
    protected $dates =['dateC'];

}
