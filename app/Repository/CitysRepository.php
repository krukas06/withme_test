<?php
/**
 * Created by PhpStorm.
 * User: artem
 * Date: 17.11.18
 * Time: 18.14
 */

namespace App\Repository;
use App\City;

class CitysRepository extends Repository
{
    public function __construct(City $city){
        $this->model=$city;
    }
}