@extends('layouts.admin')

@section('title','company update page')

@section('content')
	
	<div class="col-md-6 col-md-offset-3">
	    <h3>Edit Company Info</h3>
        <hr/>
         {!! Form::model($company,array( 'method'=>'PATCH', 'action' => ['CompanyController@update',$company->companyId],'class'=>'form-horizontal')) !!}
        
        @include('company.form');

        {!! Form::submit('Update', array('class' => 'btn btn-primary')) !!}
            
        {!! Form::close() !!}
  		
  		  @include('errors.list');

  	</div>

@stop