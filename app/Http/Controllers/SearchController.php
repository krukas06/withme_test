<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Page;
use  App\Repository\UsersRepository;
use  App\Repository\RolesRepository;

use Illuminate\Support\Facades\DB;

class SearchController extends SiteController
{
    //


    public function __construct( UsersRepository $u_rep, RolesRepository $rol_rep){

        $this->u_rep = $u_rep;
        $this->rol_rep = $rol_rep;
        
     }


    public function search (Request $request){

        $data = $request->except('_token');

        //dd($data);

        $data = DB::table('pages')->where('surname', 'LIKE', '%'.$data['surname'].'%' )->where('name','LIKE', '%'.$data['name'].'%')->where('Otchestvo','LIKE', '%'.$data['Otchestvo'].'%')
                            ->where('data_birth','LIKE', '%'.$data['data_birth'].'%')->where('data_dead','LIKE', '%'.$data['data_dead'].'%')->get();

        //dd($data);

	$photos=[];
  
        foreach ($data as  $dat){
            $photo_name=$dat->img;
            $photo_name=json_decode($photo_name);

            $dat->img = "";
            $dat->img = $photo_name;

            //array_push($photos, $photo_name);
        }
	

        return view('main')->with('data', $data);


    }





    public function searchPersonal (Request $request){

        $data = $request->except('_token');

        //dd($data);

        $data = DB::table('pages')->where('surname', 'LIKE', '%'.$data['surname'].'%' )->where('name','LIKE', '%'.$data['name'].'%')->where('Otchestvo','LIKE', '%'.$data['Otchestvo'].'%')
                            ->where('data_birth','LIKE', '%'.$data['data_birth'].'%')->where('data_dead','LIKE', '%'.$data['data_dead'].'%')->get();

        //dd($data);
	
	$roles = $this->getRoles();
        //dd($roles);
        $users = $this->getUsers();


        $photos=[];
  
        foreach ($data as  $dat){
            $photo_name=$dat->img;
            $photo_name=json_decode($photo_name);

            $dat->img = "";
            $dat->img = $photo_name;

            //array_push($photos, $photo_name);
        }


        return view('personal.personal')->with(array('users'=>$users, 'roles'=>$roles, 'data'=>$data));


    }


	public function getUsers(){
        $users = $this->u_rep->get('*');

        return $users;
        }

	public function getRoles(){
        $roles = $this->rol_rep->get('*');

        return $roles;
         }

}
