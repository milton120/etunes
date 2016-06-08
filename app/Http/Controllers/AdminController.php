<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Member;
use DB;

class AdminController extends Controller
{
    //
    public function showUser()
    {
    	$members = Member::all();
    	return view('/makeadmin',['members' => $members]);
    }
    public function setAdmin(Request $request)
    {
    	$this->validate($request, [
        'email' => 'required',
        ]);

    	$mailId = $request->get('email');

    	DB::table('member')
            ->where('email', $mailId)
            ->update(['role' => 'admin']);

       	return redirect('/adminmaker')->withSuccessMessage('Admin Privilege has given successfully!!');
    	
    }
    public function showSellHistory()
    {
    	$sells = DB::table('sellHistory')
            ->join('song', 'song.songId', '=', 'sellHistory.songId')
            ->join('member', 'member.memberId', '=', 'sellHistory.memberId')
            ->select('song.*','member.memberName', 'member.memberId', 'sellHistory.*')
            ->get();

         return view('/sellhistory',['sells' => $sells]);

    }
}
