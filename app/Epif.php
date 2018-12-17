<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Epif extends Model
{
    //
    protected $fillable = ['name', 'seen', 'page_user_id', 'text', 'user_id', 'candles_id', 'pages_id', 'img_candle', 'avtor', 'email'];

    public function User()
    {
        return $this->belongsTo('App\User');
    }

    public function Page()
    {
        return $this->belongsTo('App\Page');
    }


}
