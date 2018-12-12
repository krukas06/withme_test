<?php
/**
 * Created by PhpStorm.
 * User: artem
 * Date: 23.11.18
 * Time: 21.55
 */

namespace App\Repository;
use App\Service;

class ServicesRepository extends Repository
{
    public function __construct(Service $service){
        $this->model=$service;
    }
}
