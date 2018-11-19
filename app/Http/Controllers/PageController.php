<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use App\Oblast;
use App\User;
use Illuminate\Support\Facades\Auth;


use  App\Repository\PagesRepository;
use  App\Repository\OblastsRepository;
use  App\Repository\CitysRepository;
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

    public function __construct(PagesRepository $p_rep, OblastsRepository $o_rep, CitysRepository $c_rep)
    {
        $this->p_rep=$p_rep;
        $this->o_rep=$o_rep;
        $this->c_rep=$c_rep;
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

        return view('page_show')->with(array( 'pages'=>$pages, 'photos'=>$photos));
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
