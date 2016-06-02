@extends('layouts.admin')

@section('title','song edit page')

@section('content')
	
	<div class="col-md-6 col-md-offset-3">
	    <h3>Edit Song</h3>
        <hr/>
         {!! Form::model($song,array( 'method'=>'PATCH', 'action' => ['SongController@update',$song->songId],'class'=>'form-horizontal')) !!}
        
         @include('song.form');

        {!! Form::submit('Submit', array('class' => 'btn btn-primary')) !!}
            
        {!! Form::close() !!}
  		
  		@include('errors.list');

  	</div>

@stop