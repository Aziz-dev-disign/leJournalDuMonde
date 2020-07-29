<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie_actualite extends Model
{
    protected $table = 'categorie_actualite';
    protected $guarded = [];

    public function actualites(){
        return $this->hasMany('App\Actualite');
    }
}
