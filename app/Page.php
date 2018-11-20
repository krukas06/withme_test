<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = ['name', 'data_birth', 'data_dead', 'img', 'text', 'burials_id','user_id', 'number', 'city', 'Otchestvo', 'surname', 'oblast', 'rajon', 'gorod', 'nazvanie', 'uchastok', 'mogila', 'religiya', 'gridRadios'];

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

    public function epifs()
    {
        return $this->hasMany('App\Epif');
    }
}
