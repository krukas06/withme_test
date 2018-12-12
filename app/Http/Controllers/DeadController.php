<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Deadevent;

class DeadController extends Controller
{
    //
    public function add_event(Request $request)
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

        $event = new  Deadevent;
        $event ->fill($data);
        $event ->save();

        return view('personal.personal');
    }	

}
