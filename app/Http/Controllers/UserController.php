<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use App\Member;
use Auth;
use Hash;

class UserController extends Controller
{
    //
    public function showLogin()
    {
    	return view('login');
    }

    public function doLogin(Request $request)
    {
    	$this->validate($request, [
        'email' => 'required',
        'password' =>'required',
        ]);
		
  		$email = Input::get('email');
  		$password = Input::get('password');


        if(Auth::attempt(['email' => $email, 'password' => $password]) )
        {
        	echo "success";
        }
        else return "not success";

    }
}
