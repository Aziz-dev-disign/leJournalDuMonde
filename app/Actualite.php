<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actualite extends Model
{
    protected $guarded = [];

    public function categorie(){
        return $this->belongsTo('App\Categorie_actualite');
    }
}
