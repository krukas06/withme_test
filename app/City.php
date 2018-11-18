<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    //

    public $table = "citys";

    public function oblast()
    {
        return $this->belongsTo('App\Oblast');
    }

    public function rajons()
    {
        return $this->hasMany('App\Rajon');
    }
}
