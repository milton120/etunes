@extends('layouts.admin')

@section('title','genre edit page')

@section('content')
	
	<div class="col-md-6 col-md-offset-3">
	    <h3>Edit Genre</h3>
        <hr/>
         {!! Form::model($genre,array( 'method'=>'PATCH', 'action' => ['GenreController@update',$genre->genreId],'class'=>'form-horizontal')) !!}
        
        <div class="form-group">
        {!! Form::label('GenreName', 'Genre Name:') !!}
        {!! Form::text('genreName',$value = null, array('class' =>'form-control', 'placeholder'=>'Genre Name')) !!}
        </div>


        {!! Form::submit('Submit', array('class' => 'btn btn-primary')) !!}
            
        {!! Form::close() !!}
  		
  		@include('errors.list');

  	</div>

@stop