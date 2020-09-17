<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Niveau extends Model
{
    protected $guarded=[];
    public function matieres(){
    return $this->belongsToMany('App\Matiere');
}

    public function utilisateurs(){
    return $this->hasOne('App\Utilisateur');
}
}
