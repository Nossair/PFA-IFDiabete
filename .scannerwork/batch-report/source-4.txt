<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aliment extends Model
{

protected $table= "aliments";
protected $fillable=['quantite','glucide','name','category_id'];

public function category(){
    return $this->belongsTo('App\Category');
	}

public function image(){
    return $this->hasOne('App\Image');
}

}
