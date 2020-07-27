<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Actualite extends Model
{
    protected $guarded = [];

    public function CategorieActualite(){
        return $this->belongsTo('App\CategorieActualite');
    }
}
