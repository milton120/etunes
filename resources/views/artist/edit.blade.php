@extends('layouts.admin')

@section('title','genre create page')

@section('content')
	
	<div class="col-md-6 col-md-offset-3">
	    <h3>Edit Artist</h3>
        <hr/>
         {!! Form::model($artist,array( 'method'=>'PATCH', 'action' => ['ArtistController@update',$artist->artistId],'class'=>'form-horizontal')) !!}
        
        @include('artist.form');

        {!! Form::submit('Update', array('class' => 'btn btn-primary')) !!}
            
        {!! Form::close() !!}
  		
  		@include('errors.list');

  	</div>

@stop