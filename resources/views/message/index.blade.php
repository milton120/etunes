@extends('layouts.master')

@section('title','Home Page')

@section('content')

<div class="container">

  @if (session()->has('success_message'))
    <div class="alert alert-success">
      {{ session()->get('success_message') }}
    </div>
  @endif

  @if (session()->has('error_message'))
    <div class="alert alert-danger">
        {{ session()->get('error_message') }}
    </div>
  @endif

  <h3 class="text-center">Contact</h3>
  <p class="text-center"><em>Stay tuned and give us feedback.</em></p>

  <div class="row">
    <div class="col-md-4">
      <h3>Address</h3> <br>
      <p><span class="glyphicon glyphicon-map-marker"></span>Dhaka, Bangladesh</p>
      <p><span class="glyphicon glyphicon-phone"></span>Phone: 01720298317</p>
      <p><span class="glyphicon glyphicon-envelope"></span>Email: etunes@mail.com</p>	   
    </div>
    <div class="col-md-8">
    {!! Form::open(array('action' => 'MessageController@store')) !!}
      <div class="row">
        <div class="col-sm-6 form-group">
          {!! Form::text('name',$value = null, array('class' =>'form-control', 'placeholder'=>'name')) !!}
        </div>
        <div class="col-sm-6 form-group">
          {!! Form::text('email',$value = null, array('class' =>'form-control', 'placeholder'=>'email address')) !!}
        </div>
      </div>
        {!! Form::textarea('comment',$value = null, array('class' =>'form-control', 'placeholder'=>'comment')) !!}
      <br>
      <div class="row">
        <div class="col-md-12 form-group">
          {!! Form::submit('Send', array('class' => 'btn pull-right')) !!}
        </div>
      </div>
      {!! Form::close() !!}
    </div>
  </div>

@stop