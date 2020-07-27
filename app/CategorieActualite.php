<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class CategorieActualite extends Model
{
    protected $guarded = [];

    public function actualite(){
        return $this->hasMany('App\Actualite');
    }
}
