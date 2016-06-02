@extends('layouts.admin')

@section('title','Song Index Page')
<style>
span.note {font-size:100%;color:red;}
</style>

@section('content')

	
	<div class="col-md-6 col-md-offset-3">
		<hr>
		<h3><a href= "{{ url('/').'/'.'song/'.'create' }}" > Add New Song</a></h3>
		<hr>
		<h3>Song List</h3>
		@if (session()->has('success_message'))
            <div class="alert alert-success">
                {{ session()->get('success_message') }}
            </div>
        @endif
  	</div>

	<div >
	<table id = "song" class="hover" width="100%" cellspacing="0">
		<thead>
			<tr>
				<th>Song Id</th>
				<th>Song Title</th>
				<th>Artist Id</th>
				<th>Album Id</th>
				<th>Genre Id</th>
				<th>Duration</th>
				<th>Price</th>
				<th>Language</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
		</thead>
		<tbody>
			@foreach($songs as $song)
			<tr>
				<td>{{ $song->songId }} </td>
				<td>{{ $song->songTitle }} </td>
				<td>{{ $song->artistId }} </td>
				<td>{{ $song->albumId }} </td>
				<td>{{ $song->genreId }} </td>
				<td>{{ $song->duration }} </td>
				<td>{{ $song->price }} </td>
				<td>{{ $song->language }} </td>

				<td><a href= "{{ url('/').'/'.'song/'.$song->songId.'/edit' }}" > Edit </a></td>
				<td>
					<form action= "{{ url('/').'/'.'song/'.$song->songId }}" method="POST">
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
    	$('#song').DataTable();
		} );
  	</script>

  </div>

@stop