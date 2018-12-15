<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Remark extends Model
{
    //

	protected $fillable = ['user_id', 'page_id', 'text', 'p_surname', 'p_name', 'p_Otchestvo'];
}
