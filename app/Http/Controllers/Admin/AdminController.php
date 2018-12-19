<?php

namespace App\Http\Controllers\Admin;

use Mail;
use App\Page;
use App\Service;
use App\Remark;
use App\Epif;
use App\Question;
use Illuminate\Http\Request;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\Controller;
use  App\Repository\ServicesRepository;
use  App\Repository\QuestionsRepository;
use  App\Repository\PagesRepository;
use  App\Repository\RemarksRepository;
use  App\Repository\EpifsRepository;

class AdminController extends SiteController
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
 
    public function __construct(EpifsRepository $e_rep, RemarksRepository $rem_rep,ServicesRepository $s_rep, QuestionsRepository $q_rep, PagesRepository $p_rep)
    {
        $this->s_rep=$s_rep;
        $this->q_rep=$q_rep;
	$this->p_rep=$p_rep;
	$this->rem_rep=$rem_rep;
	$this->e_rep=$e_rep;

    }

    public function listServices()
    {
        //
	$services = $this->getServices();
	//dd($services);
	return view('admin.list_services')->with('services', $services);

    }



    public function listEpifs()
    {
        //
        $epifs = $this->getEpifs();
        //dd($services);
        return view('admin.list_epifs')->with('epifs', $epifs);

    }

     public function confirmationPage(Request $request)
    {
        //
        $data = $request->all();
        //dd($data);
        $page = $this->getPage($data['id']);

        //dd($service);
              
           $page = Page::find($data['id']);
          // dd($servic);       
           $page->flag = 1;
           $page->save();
	$pages = $this->getPages_list();

        return view('admin.list_pages')->with('pages', $pages);

    }

    
     public function confirmationEpif(Request $request)
    {
        //
        $data = $request->all();
        //dd($data);
        $epif = $this->getEpif($data['id']);

        //dd($service);

           $epif = Epif::find($data['id']);
          // dd($servic);       
           $epif->delete();
        $epifs = $this->getEpifs();

        return view('admin.list_epifs')->with('epifs', $epifs);

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


	public function addRemark(Request $request){

		$data = $request->all();

		$remark = new  Remark;
                $remark ->fill($data);
                $remark ->save();

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
	   $question->answer = $data['otvet'];
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




           public function pages_list()
    {
        //
        $pages = $this->getPages_list();
        //dd($services);
        return view('admin.list_pages')->with('pages', $pages);

    }

	public function getPages_list(){
        $pages = $this->p_rep->get('*');
        //$pages->img = json_decode($pages->img);

        return $pages;
        }

	public function getService($id){
           $service = $this->s_rep->one($id);
           return $service;
        }



	

	public function getPage($id){
           $page = $this->p_rep->one($id);
           return $page;
        }

	public function getEpif($id){
           $epif = $this->e_rep->one($id);
           return $epif;
        }



        public function getServices(){
           $services = $this->s_rep->get('*');
           return $services;
        }


	public function getEpifs(){
           $epifs = $this->e_rep->get('*');
           return $epifs;
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
