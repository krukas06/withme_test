<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    //
    public function User()
    {
        return $this->belongsTo('App\User');
    }

    public function events()
    {
        return $this->hasMany('App\Event');
    }

    public function burial()
    {
        return $this->belongsTo('App\Burial');
    }
}
