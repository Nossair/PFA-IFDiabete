<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Retios extends Model
{
    protected $table = "retios";
    public function dossier(){
    	return $this->belongsTo('App\Dossier');
    }
}
