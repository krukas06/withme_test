<?php
/**
 * Created by PhpStorm.
 * User: artem
 * Date: 21.11.18
 * Time: 12.30
 */

namespace App\Repository;
use App\Remark;

class RemarksRepository extends Repository
{
    public function __construct(Remark $remark){
        $this->model=$remark;
    }
}
