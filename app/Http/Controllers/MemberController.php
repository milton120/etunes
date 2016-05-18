<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Member;
use Carbon\Carbon;
use App\Http\Requests\CreateMemberRequest;
use Illuminate\HttpResponse;
use Hash;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $members = Member::all();
        return view('member.index',['members' => $members]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('member.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateMemberRequest $request)
    {
        /*$this->validate($request, [
        'user_name' => 'required',
        'email' => 'required',
        'password' =>'required',
        ]);*/

        $member = new Member;
        $member->memberName = $request->get('memberName');
        $member->email = $request->get('email');
        $member->password = Hash::make(($request->get('password')));
        $member->signUpDate = Carbon::now();
        $member->role = 'user';
        $member->save();

        return redirect('/member');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($memberId)
    {
        //
        $member = Member::find($memberId);
        return view('member.show',['member' => $member]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($memberId)
    {
        //
        $member = Member::find($memberId);
        return view('member.edit',['member' => $member]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $memberId)
    {
        //
        $this->validate($request, [
        'memberName' => 'required',
        'email' => 'required|unique:member,email,'.$memberId.',memberId',
        'password' =>'required',
        ]);

         $member = Member::find($memberId);
        //$member->update($request->all());

        $member->memberName = $request->get('memberName');
        $member->email = $request->get('email');
        $member->password = Hash::make($request->get('password'));
        $member->save();

        return redirect('member');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($memberId)
    {
        //
        $member = Member::find($memberId);
        $member->delete();
        return redirect('/member')->with(['del_msg' => 'sucessfully deleted.']);
    }
}
