<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    //
	 protected $fillable = ['name', 'answer', 'user_id', 'email', 'vopros', 'predlogenie', 'flag'];
}
