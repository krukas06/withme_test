<?php
/**
 * Created by PhpStorm.
 * User: artem
 * Date: 17.11.18
 * Time: 16.26
 */
namespace App\Repository;
use App\Burial;

class BurialsRepository extends Repository
{
    public function __construct(Burial $burial){
        $this->model=$burial;
    }
}