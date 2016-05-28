@extends('layouts.master')

@section('title','Home Page')
<style>
span.note {font-size:100%;color:red;}
</style>

@section('content')

	<div  >
	<h3> list of song <h3>
	<table id = "song" class="striped" width="100%" cellspacing="0">
		<thead>
			<tr>
				<th>Song Title</th>
				<th>Artist</th>
				<th>Album</th>
				<th>Price</th>
				<th>Buy</th>
			</tr>
		</thead>
		<tbody>
			@foreach($songs as $song)
			<tr>
				<td>{{ $song->songTitle }} </td>
				<td>{{ $song->artistName }} </td>
				<td>{{ $song->albumName }} </td>
				<td>{{ $song->price }} </td>
				<td><a href= "{{ url('/').'/'.'store/'.$song->songId }}" > Buy </a></td>
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