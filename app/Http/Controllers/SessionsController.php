<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;


class SessionsController extends SiteController
{
    //
    public function login()
    {
        return view('emails.login');
    }

    public function postLogin(Request $request)
    {
        $this->validate($request, ['email' => 'required|email', 'password' => 'required']);

        if ($this->signIn($request)) {
            $request->session()->flash('message', 'Добро пожаловать!');

            return redirect()->intended('personal');
        }

        $request->session()->flash('message', 'Вход запрещен!');

        return redirect()->back();
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->flash('message', 'Вы разлогинились.');

        return redirect('login');
    }

    protected function signIn(Request $request)
    {
        return Auth::attempt($this->getCredentials($request), $request->has('remember'));
    }
    protected function getCredentials(Request $request)
    {
        return [
            'email'    => $request->input('email'),
            'password' => $request->input('password'),
            'verified' => true
        ];
    }
}

