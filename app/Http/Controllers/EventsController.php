<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use  App\Repository\PagesRepository;
use  App\Repository\UsersRepository;
use  App\Repository\MyeventsRepository;


use App\Event;

class EventsController extends SiteController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


   public function __construct(PagesRepository $p_rep, UsersRepository $u_rep, MyeventsRepository $mev_rep)
    {
        $this->p_rep=$p_rep;
        $this->u_rep=$u_rep;
	$this->mev_rep=$mev_rep;
    }



    public function index()
    {
        //

	$pages = $this->getPages_list();

	//dd($pages);

        $users = $this->getUsers();	
	//dd($users);

	return view('personal.eventsform')->with(array( 'pages'=>$pages, 'users'=>$users));
    }



	 public function getEvents($user_id){
           $events = $this->mev_rep->getLists($user_id);
           return $events;
        }


       public function getUsers(){
        $users = $this->u_rep->get('*');

        return $users;
    }


    public function getPages_list(){
        $pages = $this->p_rep->get('*');
        //$pages->img = json_decode($pages->img);

       return $pages;
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        $data = $request->all();

        /*$this->validate($request, [
            'name' => 'required|max:255',
            'data_birth' => 'required|max:255',
            'data_dead' => 'required|max:255',
            'text' => 'required',
            'number' => 'max:255',
            'city' => 'max:255',
            'Otchestvo' => 'max:255',
            'surname' => 'max:255',
        ]);*/

        //dd($data);

        //не работает присовение текущего пользователя
        //$data->user_id=Auth::user()->id;

        /*$data['img'] = json_encode($names);*/

        $event = new  Event;
        $event ->fill($data);
        $event ->save();

        return view('personal.personal');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($user_id)
    {
        //

	$events = $this->getEvents($user_id);

	return view('personal.events_list')->with('events', $events);
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
