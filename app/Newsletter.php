<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
    protected $guarded=[];
    public function utilisateurs(){
    return $this->belongsTo('App\Utilisateur');
}
}
