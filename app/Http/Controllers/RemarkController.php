<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Remark;
use  App\Repository\RemarksRepository;


class RemarkController extends SiteController
{


	public function __construct(RemarksRepository $rem_rep)
    {
        $this->rem_rep=$rem_rep;

    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response




     */


	public function getRemarks($user_id){
           $remarks = $this->rem_rep->getLists($user_id);
           return $remarks;
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

	$remarks = $this->getRemarks($user_id);
      // dd($services);
        return view('personal.remark_list')->with('remarks', $remarks);
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
