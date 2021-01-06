<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    //Table name
    protected $table ='commentaires';
    //timestamps
    public $timestamps = true;


    public function patient()
    {
        return $this->belongsTo('App\Patient','patient_id');
    }
}
