<?php

namespace App\Http\Controllers\Admin;

use Mail;
use App\Service;
use App\Question;
use Illuminate\Http\Request;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\Controller;
use  App\Repository\ServicesRepository;
use  App\Repository\QuestionsRepository;



class AdminController extends SiteController
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
 
    public function __construct(ServicesRepository $s_rep, QuestionsRepository $q_rep)
    {
        $this->s_rep=$s_rep;
        $this->q_rep=$q_rep;

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
	    $result = Mail::send('personal.emailprice',['data'=>$data], function($message) use ($data){
            $message->to('krukartem307@gmail.com')->subject('Question');
            $message->from($data['email'], 'ot');
	   });
	   }	  

	}

        return view('personal.personal');

	

    }



	 public function listQuestion()
    {
        //
        $questions = $this->getQuestions();
        //dd($services);
        return view('admin.list_questions')->with('questions', $questions);

    }



	 public function addQuestion(Request $request)
    {
        //
        $data = $request->all();
        //dd($data);
        $question = $this->getQuestion($data['id']);

        //dd($service);
       if(isset($data['otvet'])){       
           $question = Question::find($data['id']);
          // dd($servic);       
           $question->flag = 1;
           $question->save();
         

           if(isset($data['email'])){
            $result = Mail::send('personal.emailquestion',['data'=>$data], function($message) use ($data){
            $message->to('krukartem307@gmail.com')->subject('Question');
            $message->from($data['email'], 'ot');
           });
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


	 public function getQuestions(){
           $questions = $this->q_rep->get('*');
           return $questions;
        }

	public function getQuestion($id){
           $question = $this->q_rep->one($id);
           return $question;
        }


}
