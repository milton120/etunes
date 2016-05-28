<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
//use App\User;
use App\Member;
use Hash;
use DB;

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
		

        if(Auth::attempt(['email' => $request['email'], 'password' => $request['password']]) )
        {
            //$members = DB::table('member')->get();
            $role = DB::table('member')->where('email', $request['email'])->value('role');
            if($role=='admin') 
            {
                return "this is admin";
            }

        	else return redirect('/');
        }
        else return redirect('/login');

    }
    public function showProfile()
    {
        $user = Auth::user();
        return view('member.show',['member' => $user]);
    }
    public function doLogout(Request $request)
    {
        Auth::logout();
        return redirect('/');
    }
}
