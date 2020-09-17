<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Horaire extends Model
{
    protected $guarded=[];
    public function matieres(){
    return $this->BelongsTo('App\Matiere');
}
}
