<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Epif extends Model
{
    //
    protected $fillable = ['name', 'text', 'user_id', 'candles_id', 'pages_id'];

    public function User()
    {
        return $this->belongsTo('App\User');
    }

    public function Page()
    {
        return $this->belongsTo('App\Page');
    }


}
