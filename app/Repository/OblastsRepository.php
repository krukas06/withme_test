<?php


namespace App\Repository;
use App\Oblast;

class OblastsRepository extends Repository
{
    public function __construct(Oblast $oblast){
        $this->model=$oblast;
    }
}