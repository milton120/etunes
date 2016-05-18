<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AboutController extends Controller
{
    //
    public function showAboutPage()
    {
    	//return "this is about page from controller.... :D ";
    	return view('about',['name'=>'ghost rider']);
    }
}
