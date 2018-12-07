<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;

class MessageController extends SiteController
{
    //
    public function message(Request $request){
        //dd($request);
        //$contacts = $this->getcontact();
        //dd($contacts);
        //$contact=view('contact')->with('contacts',$contacts);
        //$this->vars=array_add($this->vars,'contact', $contact);
        /*$this->validate($request, [
            'name' => 'reqiured|max:255',
            'email' => 'reqiured|max:255',
            'phone' => 'reqiured|max:255',
            'company' => 'reqiured|max:255',
            'text' => 'reqiured',
        ]);*/

        $data = $request->all();
        $result = Mail::send('email',['data'=>$data], function($message) use ($data){
		$message->to('krukartem307@gmail.com','wefwef')->subject('Предложение или вопрос');
		$message->from($data['email'], 'ot');

	});

        
            return view('main')->with('status','Сообщение отправлено');
        
    }

}
