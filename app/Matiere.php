<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matiere extends Model
{
    protected $guarded=[];
    public function jours(){
    return $this->belongsToMany('App\Jour');
}
    public function horaires(){
    return $this->hasMany('App\Horaire');
}
    public function niveaux(){
    return $this->belongsToMany('App\Niveau');
}
    public function utilisateur(){
    return $this->hasMany('App\Utilisateur');
}
}
