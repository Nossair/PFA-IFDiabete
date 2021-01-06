<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rapport extends Model
{
    protected $table = "rapports";
    public $timestamps = false;
    public function category(){
        return $this->belongsTo('App\Dossier');
    }
}
