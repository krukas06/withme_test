<?php
/**
 * Created by PhpStorm.
 * User: artem
 * Date: 17.11.18
 * Time: 16.27
 */

namespace App\Repository;
use App\Rajons;

class RajonsRepository extends Repository
{
    public function __construct(Rajon $rajon){
        $this->model=$rajon;
    }
}