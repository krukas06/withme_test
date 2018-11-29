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

        $data = DB::table('pages')->where('surname', $data['surname'])->orWhere('name', $data['name'])->orWhere('Otchestvo', $data['Otchestvo'])
                            ->orWhere('data_birth', $data['data_birth'])->orWhere('data_dead', $data['data_dead'])->get();

        //dd($data);

        return view('main')->with('data', $data);


    }

}
