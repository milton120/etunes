@extends('layouts.admin')

@section('title','Home Page')
<style>
span.note {font-size:100%;color:red;}
</style>

@section('content')

	
	<div class="col-md-6 col-md-offset-3">
		<hr>
		<h3><a href= "{{ url('/').'/'.'company/'.'create' }}" > Add New Company</a></h3>
		<hr>
		<h3>Company List</h3>
  	</div>

	<div >
	<table id = "company" class="hover" width="100%" cellspacing="0">
		<thead>
			<tr>
				<th>Company Id</th>
				<th>Company Name</th>
				<th>Contact Number</th>
				<th>Email</th>
				<th>Address</th>
				<th>Country</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
		</thead>
		<tbody>
			@foreach($companies as $company)
			<tr>
				<td>{{ $company->companyId }} </td>
				<td>{{ $company->companyName }} </td>
				<td>{{ $company->contactNumber }}</td>
				<td>{{ $company->companyEmail }}</td>
				<td>{{ $company->address }}</td>
				<td>{{ $company->companyCountry }}</td>
				<td><a href= "{{ url('/').'/'.'company/'.$company->companyId.'/edit' }}" > Edit </a></td>
				<td>
					<form action= "{{ url('/').'/'.'company/'.$company->companyId }}" method="POST">
						<input type ="hidden" name="_token" value = "{{ csrf_token() }}">
						<input type="hidden" value="DELETE" name="_method">
						<input type="submit" value="Delete">
					</form>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

	<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
  	<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
  	<script>
  		$(document).ready(function() {
    	$('#company').DataTable();
		} );
  	</script>

  </div>

@stop