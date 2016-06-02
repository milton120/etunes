@extends('layouts.admin')

@section('title','Home Page')
<style>
span.note {font-size:100%;color:red;}
</style>

@section('content')

	
	<div class="col-md-6 col-md-offset-3">
		<hr>
		<h3><a href= "{{ url('/').'/'.'album/'.'create' }}" > Add New Album</a></h3>
		<hr>
		<h3>Album List</h3>
		@if (session()->has('success_message'))
            <div class="alert alert-success">
                {{ session()->get('success_message') }}
            </div>
        @endif
  	</div>

	<div >
	<table id = "album" class="hover" width="100%" cellspacing="0">
		<thead>
			<tr>
				<th>Album Id</th>
				<th>Album Name</th>
				<th>Released Year</th>
				<th>Genre</th>
				<th>Artist Id</th>
				<th>Company Id</th>
				<th>Album Downloaded</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
		</thead>
		<tbody>
			@foreach($albums as $album)
			<tr>
				<td>{{ $album->albumId }} </td>
				<td>{{ $album->albumName }} </td>
				<td>{{ $album->releaseDate }} </td>
				<td>{{ $album->albumGenre }} </td>
				<td>{{ $album->artistId }} </td>
				<td>{{ $album->companyId }} </td>
				<td>{{ $album->albumDownloads }} </td>

				<td><a href= "{{ url('/').'/'.'album/'.$album->albumId.'/edit' }}" > Edit </a></td>
				<td>
					<form action= "{{ url('/').'/'.'album/'.$album->albumId }}" method="POST">
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
    	$('#album').DataTable();
		} );
  	</script>

  </div>

@stop