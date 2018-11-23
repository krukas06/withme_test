<?php
/**
 * Created by PhpStorm.
 * User: artem
 * Date: 21.11.18
 * Time: 12.30
 */

namespace App\Repository;
use App\Epif;

class EpifsRepository extends Repository
{
    public function __construct(Epif $epif){
        $this->model=$epif;
    }
}