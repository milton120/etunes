@extends('layouts.admin')

@section('title','song create page')

@section('content')
<h3>Enter a new Song</h3>
	
	<div class="col-md-6 col-md-offset-3">
	    <h3>Enter Song Info</h3>
        <hr/>
        {!! Form::open(array('action' => 'SongController@store', 'class'=>'form-horizontal')) !!}
        
        @include('song.form');

        {!! Form::submit('Submit', array('class' => 'btn btn-primary')) !!}
            
        {!! Form::close() !!}
  		
  		@include('errors.list');

  	</div>

@stop