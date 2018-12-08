<?php
/**
 * Created by PhpStorm.
 * User: artem
 * Date: 17.11.18
 * Time: 16.27
 */

namespace App\Repository;
use App\User;

class UsersRepository extends Repository
{
    public function __construct(User $user){
        $this->model=$user;
    }
}
