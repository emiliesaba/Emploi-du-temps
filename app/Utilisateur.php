<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
    protected $guarded=[];
    public function roles(){
    return $this->belongToMany('App\Roles');
}
public function Newsletters(){
    return $this->hasMany('App\newsletter');
}
public function niveaux(){
    return $this->belongTo('App\Roles');
}