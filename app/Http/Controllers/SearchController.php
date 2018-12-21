<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Page;
use Illuminate\Support\Facades\DB;

class SearchController extends SiteController
{
    //

    public function search (Request $request){

        $data = $request->except('_token');

        //dd($data);

        $data = DB::table('pages')->where('surname', 'LIKE', '%'.$data['surname'].'%' )->where('name','LIKE', '%'.$data['name'].'%')->where('Otchestvo','LIKE', '%'.$data['Otchestvo'].'%')
                            ->where('data_birth','LIKE', '%'.$data['data_birth'].'%')->where('data_dead','LIKE', '%'.$data['data_dead'].'%')->get();

        //dd($data);

        return view('main')->with('data', $data);


    }

}
