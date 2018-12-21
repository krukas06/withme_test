<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\User;

use Auth;
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


    public function forgot()
    {    
        $password = $this->generatePassword();

        $this->getPassword($password);

        return view('emails.forgot')->with('password', $password);
    }

    public function postForgot(Request $request)

   {

	 $data = $request->all();

  //      $user = User::create($request->all());

//      Mail::to($user)->send(new UserRegistered($user));

  //      $request->session()->flash('message', 'На ваш адрес было выслано письмо с подтверждением регистрации.');

        $user = User::where('email',$data['email']) -> first();
// dd($servic);
       // dd($user);
	$user->password = $data['password'];

	$user->save();

	        



      // dd($request);

        Mail::send('forgotpassword',['request'=>$request], function($message) use ($request){
            $message->to($request['email'])->subject('Question');
            $message->from('krukartem307@gmail.com', 'ot');

        });

	return redirect('/login');

     }

	
        protected function getCredentials(Request $request)
    {
        return [
	    'name'=>$request->input('name'),
            'email'    => $request->input('email'),
            'password' => $request->input('password'),
        ];
    }

    public function postRegister(Request $request)

   {

  //      $user = User::create($request->all());

//	Mail::to($user)->send(new UserRegistered($user));
       
  //      $request->session()->flash('message', 'На ваш адрес было выслано письмо с подтверждением регистрации.');

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ]);

	$request['verified']=1;

        $user = User::create($request->all());



      // dd($request);

        Mail::send('emailpassword',['request'=>$request], function($message) use ($request){
            $message->to($request['email'])->subject('Question');
            $message->from('krukartem307@gmail.com', 'ot');

        });        

       // Mail::to($user)->send(new UserRegistered($user));

       // $request->session()->flash('message', 'На ваш адрес было выслано письмо с подтверждением регистрации.');
	
	  $result = Auth::attempt($this->getCredentials($request), $request->has('remember'));

	if($result){
            $request->session()->flash('message', 'Добро пожаловать!');
            return redirect()->intended('personal');
	}
	//return redirect('/personal');
	//return  view('emails.register')->with('status','На ваш адрес было выслано письмо с подтверждением регистрации.');
    }
}

