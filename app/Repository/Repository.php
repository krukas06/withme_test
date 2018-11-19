<?php
/**
 * Created by PhpStorm.
 * User: artem
 * Date: 15.11.18
 * Time: 19.01
 */

namespace App\Repository;
use Illuminate\Http\Request;
use App\Http\Requests;

 abstract class Repository
{
    protected $model=false;

     public function get($select, $take=FALSE){
         $builder=$this->model->select($select);
         //dd($builder);
         if($take){
             $builder=$this->model->take($take);
         }
         return $builder->get();
     }
     public function one($id){
         //УКАЗЫВАЕМ id страницы которую надо выбрать
         $result=$this->model->where('id',$id)->first();
         //dd($result);
         return $result;
     }

}