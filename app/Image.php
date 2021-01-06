<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    	protected $table= "images";
	protected $fillable=['path','aliment_id'];

    public function aliment(){
	return $this->belongsTo('App\Aliment');
	}
    
}
