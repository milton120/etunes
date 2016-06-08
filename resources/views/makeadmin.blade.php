@extends('layouts.admin')

@section('title','make admin page')

@section('content')

	<div class="col-md-6 col-md-offset-3">

		<h3>Set Admin Priviledge to user</h3>
		@if (session()->has('success_message'))
            <div class="alert alert-success">
                {{ session()->get('success_message') }}
            </div>
        @endif
  	</div>

  	<div class="col-md-6 col-md-offset-3">
        <hr/>
        {!! Form::open(array('action' => 'AdminController@setAdmin','class'=>'form-horizontal')) !!}
        
        <div class="form-group">
        {!! Form::label('email', 'Email:') !!}
        {!! Form::email('email', $value = null, array('class' =>'form-control', 'placeholder'=>'Email Address')) !!}
        </div>

        {!! Form::submit('Make Admin', array('class' => 'btn btn-primary')) !!}
            
        {!! Form::close() !!}
  		
  		@include('errors.list');

  	</div>

	<div >
	<table id = "memberlist" class="hover" width="100%" cellspacing="0">
		<thead>
			<tr>
				<th>Member Id</th>
				<th>Member Name</th>
				<th>Email Address</th>
			</tr>
		</thead>
		<tbody>
			@foreach($members as $member)
			<tr>
				<td>{{ $member->memberId }} </td>
				<td>{{ $member->memberName }} </td>
				<td>{{ $member->email }} </td>

			</tr>
			@endforeach
		</tbody>
	</table>
		<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
  	<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
  	<script>
  		$(document).ready(function() {
    	$('#memberlist').DataTable();
		} );
  	</script>

	</div>

@stop