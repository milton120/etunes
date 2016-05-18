@extends('layouts.master')

@section('title','member create page')

@section('content')
<h3>Let's Start the journey of music. </h3>
	
	<div class="col-md-6 col-md-offset-3">
	    <h3>Update Profile Information</h3>
        <hr/>
        {!! Form::model($member,array( 'method'=>'PATCH', 'action' => ['MemberController@update',$member->memberId],'class'=>'form-horizontal')) !!}
        
        @include('member.form',['submitButtonText' => 'Update'])
            
        {!! Form::close() !!}
  		
  		@include('errors.list');

  </div>

@stop