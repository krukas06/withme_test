<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\User;
use App\Mail\UserRegistered;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\SiteController;

class RegistrationController extends SiteController
{
    //

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function confirmEmail(Request $request, $token)
    {
        User::whereToken($token)->firstOrFail()->confirmEmail();

        $request->session()->flash('message', 'Учетная запись подтверждена. Войдите под своим именем.');

        return redirect('login');
    }

     public function generatePassword(){
        $chars="qazxswedcvfrtgbnhyujmkiolp1234567890QAZXSWEDCVFRTGBNHYUJMKIOLP";

// Количество символов в пароле.

        $max=10;

// Определяем количество символов в $chars

        $size=StrLen($chars)-1;

// Определяем пустую переменную, в которую и будем записывать символы.

        $password=null;

// Создаём пароль.

        while($max--) {
            $password .= $chars[rand(0, $size)];
        }

        return $password;
    }    


    public function getPassword($password){
        
        return View::make('emails.confirm')->with('password',$password);

    }

    public function register()
    {    
        $password = $this->generatePassword();

	$this->getPassword($password);
       
        return view('emails.register')->with('password', $password);
    }


    public function postRegister(Request $request)
   {

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ]);

        $user = User::create($request->all());

        Mail::to($user)->send(new UserRegistered($user));

        $request->session()->flash('message', 'На ваш адрес было выслано письмо с подтверждением регистрации.');
	
	return 'На ваш адрес было выслано письмо с подтверждением регистрации.';
    }
}

