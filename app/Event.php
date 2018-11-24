<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['name', 'text', 'pages_id', 'category_id'];


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
