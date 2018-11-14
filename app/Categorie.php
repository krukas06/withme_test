<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    //
    public function categories()
    {
        return $this->hasMany('App\ Event');
    }
}
