<?php

namespace App\Mail;
use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class UserRegistered extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $user;

    public function __construct(User $user)
    {
        //
	$this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
/*
return	Mail::send('emails.confirm', function($message) use ($user){
            $message->to($user['email'])->subject('Question');
            $message->from('krukartem307@gmail.com', 'ot');
    }
*/
/*
            Mail::send('email',['data'=>$data], function($message) use ($data){
            $message->to('krukartem307@gmail.com')->subject('Question');
            $message->from($data['email'], 'ot');

	    return view('main');
*/	   
           
             return $this->from('admin@178.124.206.77')
            ->view('emails.confirm');

            


}
}
