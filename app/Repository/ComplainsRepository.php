<?php
/**
 * Created by PhpStorm.
 * User: artem
 * Date: 21.11.18
 * Time: 12.30
 */

namespace App\Repository;
use App\Complain;

class ComplainsRepository extends Repository
{
    public function __construct(Complain $complain){
        $this->model=$complain;
    }
}
