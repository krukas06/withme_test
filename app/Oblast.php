<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oblast extends Model
{
    //
    public function citys()
    {
        return $this->hasMany('App\City');
    }
}
