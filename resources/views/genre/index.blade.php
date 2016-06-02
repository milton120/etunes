@extends('layouts.admin')

@section('title','Home Page')
<style>
span.note {font-size:100%;color:red;}
</style>

@section('content')

	
	<div class="col-md-6 col-md-offset-3">
		<hr>
		<h3><a href= "{{ url('/').'/'.'genre/'.'create' }}" > Add New Genre</a></h3>
		<hr>
		<h3>Genre List</h3>
  	</div>

	<div >
	<table id = "genre" class="hover" width="100%" cellspacing="0">
		<thead>
			<tr>
				<th>Genre Id</th>
				<th>Genre Name</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
		</thead>
		<tbody>
			@foreach($genres as $genre)
			<tr>
				<td>{{ $genre->genreId }} </td>
				<td>{{ $genre->genreName }} </td>
				<td><a href= "{{ url('/').'/'.'genre/'.$genre->genreId.'/edit' }}" > Edit </a></td>
				<td>
					<form action= "{{ url('/').'/'.'genre/'.$genre->genreId }}" method="POST">
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
    	$('#genre').DataTable();
		} );
  	</script>

  </div>

@stop