<?php

namespace App\Http\Controllers;

use App\Epif;
use Illuminate\Http\Request;
use  App\Repository\EpifsRepository;



class EpifController extends SiteController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct(EpifsRepository $e_rep){

	 $this->e_rep=$e_rep;

     }


    public function deleteEpif(Request $request)
    {
	$data = $request->all();
	$epif = Epif::find($data['id']);
	$epif->delete();

	return redirect('/page/'.$data['pages_id']);
   }

    public function editEpif(Request $request)
    {
//
      $data = $request->all();
      //dd($data);
      $epif = $this->getEpif($data['id']);

     //dd($service);
    
           $epif = Epif::find($data['id']);
           // dd($servic);
           $epif->text = $data['text'];
           $epif->save();
    
     return redirect('/page/'.$data['pages_id']);

     }

     public function getEpif($id){
           $epif = $this->e_rep->one($id);
           return $epif;
        }


    public function index()
    {
        //
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

        $epif = new  Epif;
        $epif ->fill($data);
        $epif ->save();

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
