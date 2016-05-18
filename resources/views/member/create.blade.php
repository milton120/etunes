@extends('layouts.master')

@section('title','member create page')

@section('content')
<h3>Let's Start the journey of music. </h3>
	
	<div class="col-md-6 col-md-offset-3">
	    <h3>Sign Up</h3>
        <hr/>
        {!! Form::open(array('action' => 'MemberController@store', 'class'=>'form-horizontal')) !!}
        
        @include('member.form',['submitButtonText'=>'Sign Up']);
            
        {!! Form::close() !!}
  		
  		@include('errors.list');

  	</div>

@stop