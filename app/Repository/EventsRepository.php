<?php
/**
 * Created by PhpStorm.
 * User: artem
 * Date: 23.11.18
 * Time: 21.55
 */

namespace App\Repository;
use App\Deadevent;

class EventsRepository extends Repository
{
    public function __construct(Deadevent $event){
        $this->model=$event;
    }
}
