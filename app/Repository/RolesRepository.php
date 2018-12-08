<?php
/**
 * Created by PhpStorm.
 * User: artem
 * Date: 15.11.18
 * Time: 19.03
 */

namespace App\Repository;
use App\Role;

class RolesRepository extends Repository
{
    public function __construct(Role $role){
        $this->model=$role;
    }
}
