<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    //

    protected $fillable = ['name', 'email', 'number', 'burials', 'usluga', 'desription', 'user_id', 'flag'];

    public $table = "services";



}
