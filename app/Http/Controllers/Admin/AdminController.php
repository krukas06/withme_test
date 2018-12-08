<?php

namespace App\Http\Controllers\Admin;


use App\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\Controller;
use  App\Repository\ServicesRepository;



class AdminController extends SiteController
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
 
    public function __construct(ServicesRepository $s_rep)
    {
        $this->s_rep=$s_rep;

    }

    public function listServices()
    {
        //
	$services = $this->getServices();
	//dd($services);
	return view('admin.list_services')->with('services', $services);

    }


     public function addPrice(Request $request)
    {
        //
	$data = $request->all();
	//dd($data);
        $service = $this->getService($data['id']);
	
	//dd($service);
       if(isset($data['price'])){	
	   $servic = Service::find($data['id']);
	  // dd($servic);	
           $servic->flag = 1;
	   $servic->admin_flag = 1;
           $servic->price = $data['price'];
	   $servic->save();
         

	   if(isset($data['email'])){
	    $result = Mail::send('email',['data'=>$data], function($message) use ($data){
            $message->to('krukartem307@gmail.com')->subject('Question');
            $message->from($data['email'], 'ot');
	   }	  
	}

        return view('personal.personal');

    }


	public function getService($id){
           $service = $this->s_rep->one($id);
           return $service;
        }



        public function getServices(){
           $services = $this->s_rep->get('*');
           return $services;
        }

}
