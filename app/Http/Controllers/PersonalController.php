<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Repository\UsersRepository;
use  App\Repository\RolesRepository;
use  App\Repository\PagesRepository;
use  App\Repository\EpifsRepository;
use App\User;
use Illuminate\Support\Facades\Auth;

class PersonalController extends SiteController{


     public function __construct(EpifsRepository $e_rep, UsersRepository $u_rep, RolesRepository $rol_rep, PagesRepository $p_rep){

	$this->u_rep = $u_rep;
	$this->rol_rep = $rol_rep;
	$this->p_rep = $p_rep;
	$this->e_rep=$e_rep;


     }




    public function index()
    {
        //

	$roles = $this->getRoles();
	//dd($roles);
	$users = $this->getUsers();
	//dd($users);

	$kol = 0;
	$epifs = $this->getEpifs();
	if(isset($epifs)){
	foreach($epifs as $epif){
		if($epif->seen == 0 && Auth::id() == $epif->page_user_id){
			$kol++;
		}
	}
	}

	$photos=[];
        $pages=$this->getPages_list();
        foreach ($pages as  $page){
            $photo_name=$page->img;
            $photo_name=json_decode($photo_name);

            $page->img = "";
            $page->img = $photo_name;

            //array_push($photos, $photo_name);
        }

	//dd($pages);

	return view('personal.personal')->with(array('users'=>$users, 'roles'=>$roles, 'pages'=>$pages, 'kol'=>$kol));;
    }



	public function listMessage()
        {
    //
 	   $epifs = $this->getEpifs();
   	 //dd($services);
  	   return view('personal.message_list')->with('epifs', $epifs);

        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getEpifs(){
      $epifs = $this->e_rep->get('*');
      return $epifs;
    }


    public function getUsers(){
        $users = $this->u_rep->get('*');

        return $users;
    }


   public function getRoles(){
        $roles = $this->rol_rep->get('*');

        return $roles;
    }


     public function getPages_list(){
        $pages = $this->p_rep->get('*');
        //$pages->img = json_decode($pages->img);

        return $pages;
    }


    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
