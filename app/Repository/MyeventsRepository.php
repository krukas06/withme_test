<?php
/**
 * Created by PhpStorm.
 * User: artem
 * Date: 23.11.18
 * Time: 21.55
 */

namespace App\Repository;
use App\Event;

class MyeventsRepository extends Repository
{
    public function __construct(Event $event){
        $this->model=$event;
    }
}


