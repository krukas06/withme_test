<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    //

    protected $fillable = ['name', 'email', 'number', 'burials', 'usluga', 'desription'];

    public $table = "services";



}
