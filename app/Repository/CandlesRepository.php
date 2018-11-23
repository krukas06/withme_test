<?php
/**
 * Created by PhpStorm.
 * User: artem
 * Date: 21.11.18
 * Time: 16.03
 */
namespace App\Repository;
use App\Candle;

class CandlesRepository extends Repository
{
    public function __construct(Candle $candle){
        $this->model=$candle;
    }
}