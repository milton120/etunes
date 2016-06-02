@extends('layouts.admin')

@section('title','genre create page')

@section('content')
<h3>Create a new Genre </h3>
	
	<div class="col-md-6 col-md-offset-3">
	    <h3>Create Genre</h3>
        <hr/>
        {!! Form::open(array('action' => 'GenreController@store', 'class'=>'form-horizontal')) !!}
        
        <div class="form-group">
        {!! Form::label('GenreName', 'Genre Name:') !!}
        {!! Form::text('genreName',$value = null, array('class' =>'form-control', 'placeholder'=>'Genre Name')) !!}
        </div>


        {!! Form::submit('Submit', array('class' => 'btn btn-primary')) !!}
            
        {!! Form::close() !!}
  		
  		@include('errors.list');

  	</div>

@stop