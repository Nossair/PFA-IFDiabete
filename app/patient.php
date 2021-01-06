<?php

namespace App;
use Zizaco\Entrust\Traits\EntrustUserTrait;
use Illuminate\Database\Eloquent\Model;
use Laravel\Passport\HasApiTokens;

class Patient extends Model
{
    protected $table = 'patients';
     protected $fillable = ['nom','prenom','clef','age','sexe','telephone','ratioPetitDej','ratioDej','ratioColl','ratioDinnez','IndiceSensibilite','archived'] ;

     public function setPasswordAttribute($password){
	 $this->attributes['clef'] = bcrypt($password);
	}

    public function dossier()
    {
        return $this->hasOne('App\Dossier');
    }
    public function commentaire()
    {
        return $this->hasMany('App\Commentaire');
    }
    // public function ratios()
    //   {
    //       return $this->hasOne('App\Retios');
    //   }

}
