<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Message;

class PageController extends Controller
{
    //

    /*public function messageSave(Request $request)
    {
    	dd("check");
    	$message = new Message;
        $message->name = $request->get('name');
        $message->email = $request->get('email');
        $message->comment = $request->get('comment');
        $message->save();

        return redirect('/contact')->withSuccessMessage('Your message has been stored. Thanks!');
    }*/
    
    public function showAboutPage()
    {
    	//return "this is about page from controller.... :D ";
    	return view('about',['name'=>'ghost rider']);
    }
    public function showContactPage()
    {
    	return view('contact');
    }
}
