<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
//use App\User;
use App\Member;
use Hash;

class UserController extends Controller
{
    //
    public function showLogin()
    {
    	return view('login');
    }

    public function postSignIn(Request $request)
    {
    	$this->validate($request, [
        'email' => 'required',
        'password' =>'required',
        ]);
		
  		//$email = Input::get('email');
  		//$password = Input::get('password');


        if(Auth::attempt(['email' => $request['email'], 'password' => $request['password']]) )
        {
        	return redirect('/');
        }
        else return redirect('/login');

    }
    public function doLogout(Request $request)
    {
        Auth::logout();
        return redirect('/');
    }
}
