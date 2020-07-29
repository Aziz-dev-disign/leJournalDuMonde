<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actualite extends Model
{
    protected $guarded = [];

    public function categorie_actualite(){
        return $this->hasOne('App\Categorie_actualite');
    }
}
