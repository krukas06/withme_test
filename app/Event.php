<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['name', 'text', 'user_id', 'date'];


    public function Page()
    {
        return $this->belongsTo('App\Page');
    }

    //
    public function categories()
    {
        return $this->belongsTo('App\Categorie');
    }

}
