<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use Auth;
use Hash;
use Redirect;


class UloginController extends Controller
{

// Login user through social network.
    public function login(Request $request)
    {
        // Get information about user.
        $data = file_get_contents('http://ulogin.ru/token.php?token=' . $_POST['token'] . '&host=' . $_SERVER['HTTP_HOST']);
        $user = json_decode($data, TRUE);

        $network = $user['network'];
         
         

        // Find user in DB.
        $userData = User::where('email', $user['email'])->first();

	//dd($userData);

        // Check exist user.
        if (isset($userData->id)) {

            // Check user status.
           

                // Make login user.
                Auth::loginUsingId($userData->id, TRUE);
            
            // Wrong status.
           

           return Redirect::back();
        }
        // Make registration new user.
       else {

           //Create new user in DB.
            $newUser = User::create([
 	     'name' => $user['first_name'],
            'email' =>  $user['email'],
            'password' => Hash::make(str_random(8))
                
            ]);

            // Make login user.
            Auth::loginUsingId($newUser->id, TRUE);

            \Session::flash('flash_message', trans('interface.ActivatedSuccess'));

            return Redirect::back();

         
       }
   }


}

