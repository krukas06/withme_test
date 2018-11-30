<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Page;
use App\Oblast;
use App\User;
use App\Epif;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Builder;



use  App\Repository\PagesRepository;
use  App\Repository\EpifsRepository;
use  App\Repository\OblastsRepository;
use  App\Repository\CitysRepository;
use  App\Repository\CandlesRepository;
use  App\Repository\EventsRepository;


class MainController extends SiteController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(PagesRepository $p_rep, OblastsRepository $o_rep, CitysRepository $c_rep, EpifsRepository $e_rep, CandlesRepository $can_rep, EventsRepository $ev_rep)
    {
        $this->p_rep=$p_rep;
        $this->o_rep=$o_rep;
        $this->c_rep=$c_rep;
        $this->e_rep=$e_rep;
        $this->can_rep=$can_rep;
        $this->ev_rep=$ev_rep;
    }


    public function index()
    {
        //

        $photos=[];
        $pages=$this->getPages_list();
        foreach ($pages as  $page){
            $photo_name=$page->img;
            $photo_name=json_decode($photo_name);

            $page->img = "";
            $page->img = $photo_name;

            //array_push($photos, $photo_name);
        }

        /*foreach ($pages as $page){

            array_push($photos, $page->img);
        }*/

            //dd($photos);

      //  dd($photos);

     /*if(is_array($photos) && isset($photos)){
        foreach ($pages as $page){
            foreach($photos as $brand=>$massiv){
                foreach($massiv as $inner_key=>$value){
                    if($inner_key == 0){
                        $page->img = "";
                        $page->img = $value;
                    }
                }
            }
        }

     }*/
    /*foreach ($pages as $page) {

         $photos=$page->img = json_encode($page->img);

     }*/
        //$id = Auth::user()->id;

        return view('main')->with(array( 'pages'=>$pages));
    }


   /*  * Show the form for creating a new resource.
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
    }



    public function getOblast(){
        $oblasts = $this->o_rep->get('*');

        return $oblasts;
    }

    public function getPages_list(){
        $pages = $this->p_rep->get('*');
        //$pages->img = json_decode($pages->img);

        return $pages;
    }

    public function getPage($id){
        $pages = $this->p_rep->one($id);
        //$pages->img = json_decode($pages->img);

        return $pages;
    }


    public function getCitys(){
        $citys = $this->c_rep->get('*');
        return $citys;
    }

    public function getCandles(){
        $candles= $this->can_rep->get('*');
        return $candles;
    }

    public function getEpifs(){
        $epifs = $this->e_rep->get('*');
        return $epifs;
    }

    public function getEvents(){
        $events = $this->ev_rep->get('*');
        return $events;
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
