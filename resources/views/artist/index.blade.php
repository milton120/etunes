@extends('layouts.admin')

@section('title','Home Page')
<style>
span.note {font-size:100%;color:red;}
</style>

@section('content')

	
	<div class="col-md-6 col-md-offset-3">
		<hr>
		<h3><a href= "{{ url('/').'/'.'artist/'.'create' }}" > Add New Artist</a></h3>
		<hr>
		<h3>Artist List</h3>
		@if (session()->has('success_message'))
            <div class="alert alert-success">
                {{ session()->get('success_message') }}
            </div>
        @endif
  	</div>

	<div >
	<table id = "artist" class="hover" width="100%" cellspacing="0">
		<thead>
			<tr>
				<th>Artist Id</th>
				<th>Artist Name</th>
				<th>Country</th>
				<th>Region</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
		</thead>
		<tbody>
			@foreach($artists as $artist)
			<tr>
				<td>{{ $artist->artistId }} </td>
				<td>{{ $artist->artistName }} </td>
				<td>{{ $artist->country }} </td>
				<td>{{ $artist->region }} </td>

				<td><a href= "{{ url('/').'/'.'artist/'.$artist->artistId.'/edit' }}" > Edit </a></td>
				<td>
					<form action= "{{ url('/').'/'.'artist/'.$artist->artistId }}" method="POST">
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
    	$('#artist').DataTable();
		} );
  	</script>

  </div>

@stop