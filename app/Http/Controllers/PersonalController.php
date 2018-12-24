<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Repository\UsersRepository;
use  App\Repository\RolesRepository;
use  App\Repository\PagesRepository;
use  App\Repository\EpifsRepository;
use  App\Repository\QuestionsRepository;
use App\User;
use App\Epif;
use Illuminate\Support\Facades\Auth;

class PersonalController extends SiteController{


     public function __construct( QuestionsRepository $q_rep, EpifsRepository $e_rep, UsersRepository $u_rep, RolesRepository $rol_rep, PagesRepository $p_rep){

	$this->u_rep = $u_rep;
	$this->rol_rep = $rol_rep;
	$this->p_rep = $p_rep;
	$this->e_rep=$e_rep;
	$this->q_rep=$q_rep;


     }



         public function seenMessage(Request $request)
    {
        //
        $data = $request->all();
        //dd($data);
        $page = $this->getMessage($data['id']);
        //dd($service);
              
           $epif = Epif::find($data['id']);
          // dd($servic);       
           $epif->seen = 1;
           $epif->save();
	//$pages = $this->getPages_list();
        return redirect('/list/message');
	//return view('admin.list_pages')->with('pages', $pages);
    }
    


         public function updateUser(Request $request)
    {
        //
        $data = $request->all();
        //dd($data);
       // $user = $this->getUser($data['id']);
        //dd($service);

           $user = User::find($data['id']);
          // dd($servic);
	          
           $user->surname = $data['surname'];
           $user->name_l = $data['name_l'];
	   $user->Otchestvo = $data['Otchestvo'];
	   $user->name = $data['name'];
	   $user->password = $data['password'];
	   $user->email = $data['email'];
	   $user->save();
        //$pages = $this->getPages_list();
        return redirect('/personal');
        //return view('admin.list_pages')->with('pages', $pages);
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

	return view('personal.personal')->with(array('users'=>$users, 'roles'=>$roles, 'pages'=>$pages, 'kol'=>$kol));
    }



	public function listMessage()
        {
    //
 	   $epifs = $this->getEpifs();
   	 //dd($services);
  	   return view('personal.message_list')->with('epifs', $epifs);

        }

         public function listAnswer()
        {
    //
           $questions = $this->getAnswer();
         //dd($services);
           return view('personal.list_answer')->with('questions', $questions);

        }

	public function getSetings()
        {
    //
           $users = $this->getUser(Auth::id());
         //dd($services);
           return view('personal.seting')->with('users', $users);

        }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    	public function getMessage($id){
           $epif = $this->e_rep->one($id);
           return $epif;
        }

    public function getUser($id){
           $user = $this->u_rep->one($id);
           return $user;
        }



    public function getEpifs(){
      $epifs = $this->e_rep->get('*');
      return $epifs;
    }


    public function getAnswer(){
      $questions = $this->q_rep->get('*');
      return $questions;
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
