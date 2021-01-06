<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evolution extends Model
{
    protected $table = "evolutions";
    public function dossier(){
        return $this->belongsTo('App\Dossier');
    }
    protected $primaryKey = "dossier_id";
}