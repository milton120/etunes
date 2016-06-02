@extends('layouts.admin')

@section('title','album create page')

@section('content')
<h3>Enter Album Info </h3>
	
	<div class="col-md-6 col-md-offset-3">
	    <h3>Album</h3>
        <hr/>
        {!! Form::open(array('action' => 'AlbumController@store', 'class'=>'form-horizontal')) !!}
        
        @include('album.form');

        {!! Form::submit('Submit', array('class' => 'btn btn-primary')) !!}
            
        {!! Form::close() !!}
  		
  		@include('errors.list');

  	</div>

@stop