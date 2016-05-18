@extends('layouts.master')

@section('title','Login Page')

@section('content')

	<div class="col-md-6 col-md-offset-3">
	    <h3>Sign In</h3>
        <hr/>
        {!! Form::open(array('action' => 'UserController@doLogin','class'=>'form-horizontal')) !!}
        
        <div class="form-group">
        {!! Form::label('email', 'Email:') !!}
        {!! Form::email('email', $value = null, array('class' =>'form-control', 'placeholder'=>'Email Address')) !!}
        </div>

        <div class="form-group">
        {!! Form::label('password', 'Password:') !!} <br>
        {!! Form::password('password', $value = null, array('class' =>'form-control', 'placeholder'=>'password')) !!}
        </div>

        {!! Form::submit('Log In', array('class' => 'btn btn-primary')) !!}
            
        {!! Form::close() !!}
  		
  		@include('errors.list');

  	</div>


@stop