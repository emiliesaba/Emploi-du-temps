<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jour extends Model
{
    protected $guarded=[];
    public function matieres(){
    return $this->belongsToMany('App\Matiere');
}
}
