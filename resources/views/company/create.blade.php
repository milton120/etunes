@extends('layouts.admin')

@section('title','Company create page')

@section('content')
<h3>Enter a new Company </h3>
	
	<div class="col-md-6 col-md-offset-3">
	    <h3>Enter Company Info</h3>
        <hr/>
        {!! Form::open(array('action' => 'CompanyController@store', 'class'=>'form-horizontal')) !!}
        
        @include('company.form');

        {!! Form::submit('Submit', array('class' => 'btn btn-primary')) !!}
            
        {!! Form::close() !!}
  		
  		@include('errors.list');

  	</div>

@stop