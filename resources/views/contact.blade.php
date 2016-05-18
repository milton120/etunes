@extends('layouts.master')

@section('title','Home Page')

@section('content')

<div class="container">
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
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
      <br>
      <div class="row">
        <div class="col-md-12 form-group">
          <button class="btn pull-right" type="submit">Send</button>
        </div>
      </div>	
    </div>
  </div>

@stop