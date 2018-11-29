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
/*use  App\Repository\BurialsRepository;
use  App\Repository\RegionsRepository;
use  App\Repository\Repository;*/

class PageController extends SiteController
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
        $this->template='pages';
    }



    //ОТОБРАЖЕНИЕ ВСЕХ СУЩЕСТВУЮЩИХ СТРАНИЦ
    public function index()
    {
        //ВЫБИРАЕМ ОДНУ СТРАНИЦУ И ДЕКОДИРУЕМ ЯЧЕЙКУ С ФОТО, ДОБАВЛЯЯ ЕЕ В МАССИВ

        $pages = $this->getPages_list();


        return view('pages_lists')->with(array( 'pages'=>$pages));


        //return $this->RenderOutPut();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    //ОТОБОАЖЕНИЕ ФОРМЫ ДЛЯ ДОБАВЛЕНИЯ СТРАНИЦЫ
    public function create()
    {
        //

        $oblasts=$this->getOblast();

        //dd($oblasts);

        $citys = $this->getCitys();

        //dd($oblasts);

        $id = Auth::user()->id;

        return view('addpage')->with(array('id'=>$id, 'oblasts'=>$oblasts, 'citys'=>$citys));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    // Получение всех областей
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
    //СОХРАНЕНИЕ В БД
    public function store(Request $request)
    {

        //dd($request);
        //dd($request);

        if ($request->hasFile('img')) {

            /*$paths = [];
            foreach($request->img as $image) {


                $this->validate($image, [
                    'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ]);

                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('images'), $imageName);
                $paths[] = $imageName;
                //dd($paths);
            }*/
/*
            $file = $request->file('img');
            $input['img']= $file->getClientOriginalName();

            $file->move(public_path('images'), $input['img']);*/
            //json_encode($request->img);

            $names = [];
            foreach($request->file('img') as $image)
            {
                //$destinationPath = 'content_images/';
                $filename = $image->getClientOriginalName();
                $image->move(public_path('images'), $filename);
                array_push($names, $filename);

            }
            //dd($names);
            //$request->img = json_encode($names);

        }

        $data = $request->all();

        // dd($data);

        $this->validate($request, [
            'name' => 'required|max:255',
            'data_birth' => 'required|max:255',
            'data_dead' => 'required|max:255',
            'text' => 'required',
            'number' => 'max:255',
            'city' => 'max:255',
            'Otchestvo' => 'max:255',
            'surname' => 'max:255',
        ]);

        //dd($data);

        //не работает присовение текущего пользователя
        //$data->user_id=Auth::user()->id;

        $data['img'] = json_encode($names);

        $page = new  Page;
        $page ->fill($data);
        $page ->save();

        return view('add_succses');
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

        $photos=[];
        $pages=$this->getPage($id);
        $photo_name=$pages->img;
        $photo_name=json_decode($photo_name);
        array_push($photos, $photo_name);

        //dd($photos);

        $epifs=$this->getEpifs();
        $candles=$this->getCandles();
        $events=$this->getEvents();

        return view('test')->with(array( 'pages'=>$pages, 'photos'=>$photos, 'epifs'=>$epifs, 'candles'=>$candles, 'events'=>$events));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id, Page $page)
    {

        if($request->isMethod('post')){


            //dd($request);
            if ($request->hasFile('img')) {

                $names = [];
                foreach($request->file('img') as $image)
                {
                    //$destinationPath = 'content_images/';
                    $filename = $image->getClientOriginalName();
                    $image->move(public_path('images'), $filename);
                    array_push($names, $filename);

                }

            }

            $data = $request->except('_token');

            $data['img'] = json_encode($names);

            //$page = new  Page;
            $page = Page::where('id', $id);

            //$page->fill($data);

            $page->update($data);

            return view('add_succses');

        }

        $photos=[];
        $pages=$this->getPage($id);
        $photo_name=$pages->img;
        $photo_name=json_decode($photo_name);
        array_push($photos, $photo_name);

        $oblasts=$this->getOblast();

        //dd($oblasts);

        $citys = $this->getCitys();

        $pages=$this->getPage($id);



        //dd($oblasts)


        return view('addpage')->with(array('id'=>$id, 'photos'=>$photos, 'oblasts'=>$oblasts, 'citys'=>$citys, 'pages'=>$pages));;
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
