<?php
/**
 * Created by PhpStorm.
 * User: artem
 * Date: 15.11.18
 * Time: 19.03
 */

namespace App\Repository;
use App\Page;

class PagesRepository extends Repository
{
    public function __construct(Page $page){
        $this->model=$page;
    }
}