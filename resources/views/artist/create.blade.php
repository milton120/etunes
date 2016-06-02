@extends('layouts.admin')

@section('title','genre create page')

@section('content')
<h3>Enter Artist Info </h3>
	
	<div class="col-md-6 col-md-offset-3">
	    <h3>Artist</h3>
        <hr/>
        {!! Form::open(array('action' => 'ArtistController@store', 'class'=>'form-horizontal')) !!}
        
        @include('artist.form');

        {!! Form::submit('Submit', array('class' => 'btn btn-primary')) !!}
            
        {!! Form::close() !!}
  		
  		@include('errors.list');

  	</div>

@stop