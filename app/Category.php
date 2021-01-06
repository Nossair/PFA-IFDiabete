<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $table = "categories" ; 
    protected $fillable = ['name','image'] ;
    public $timestamps = false;

    public function aliments(){
	return $this->hasMany('App\Aliment','category_id');
	}

}
