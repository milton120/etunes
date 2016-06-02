@extends('layouts.admin')

@section('title','album edit page')

@section('content')
	
	<div class="col-md-6 col-md-offset-3">
	    <h3>Edit Album</h3>
        <hr/>
         {!! Form::model($album,array( 'method'=>'PATCH', 'action' => ['AlbumController@update',$album->albumId],'class'=>'form-horizontal')) !!}
        
        @include('album.form');

        {!! Form::submit('Update', array('class' => 'btn btn-primary')) !!}
            
        {!! Form::close() !!}
  		
  		@include('errors.list');

  	</div>

@stop