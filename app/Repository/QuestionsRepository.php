<?php
/**
 * Created by PhpStorm.
 * User: artem
 * Date: 15.11.18
 * Time: 19.03
 */

namespace App\Repository;
use App\Question;

class QuestionsRepository extends Repository
{
    public function __construct(Question $Question){
        $this->model=$Question;
    }
}
