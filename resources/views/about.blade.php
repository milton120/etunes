@extends('layouts.master')

@section('title','Home Page')

@section('content')

<div class="container text-center">
  <h3>etunes</h3>
  <p><em>We love music!</em></p>
  <p>Start your music journey with us.</p>
  <br> 
  <div class="row">
  	

    <div class="col-md-3">
      <p class="text-center"><strong>Milton</strong></p><br>
      <a href="#demo2" data-toggle="collapse">
        <img src="{{URL::asset('/image/milton.jpg')}}" class="img-circle person" alt="Milton" width="255" height="255">
      </a>
      <div id="demo2" class="collapse">
        <p>Founder and CEO</p>
        <p>Studying in BUET</p>
        <p> Love's travelling </p>
      </div>
    </div>

    <div class="col-md-3">
      <p class="text-center"><strong>Reza</strong></p><br>
      <a href="#demo3" data-toggle="collapse">
        <img src="{{URL::asset('/image/reza.jpg')}}" class="img-circle person" alt="Reza" width="255" height="255">
      </a>
      <div id="demo3" class="collapse">
        <p>Co-founder and CEO</p>
        <p>Studying in BUET</p>
        <p> Love's Robotics </p>
      </div>
    </div>
  </div>
</div>


@stop