<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Mail;

class MessageController extends SiteController
{
    //
    public function message(Request $request){
        dd($request);
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
        $result = Mail::send('email',['data'=>$data], function($m) use ($data){
            $mail_admin = env('MAIL_ADMIN');
            $m->from($data['email'], $data['name']);
            $m->to($mail_admin,'mr_admin')->subject('Question');
        });
        if($result){
            return redirect()->route('main')->with('status','Сообщение отправлено');
        }
    }

}
