@extends('layouts.admin')

@section('title','sell history Page')

@section('content')


	<div class="col-md-6 col-md-offset-3">
		<hr>
		<h3>Sell History</h3>
  	</div>


	<div >
	<table id = "sell" class="hover" width="100%" cellspacing="0">
		<thead>
			<tr>
				<th>Song Title</th>
				<th>Buyers Name</th>
				<th>Price</th>
				<th>Date</th>
			</tr>
		</thead>
		<tbody>
			@foreach($sells as $sell)
			<tr>
				<td>{{ $sell->songTitle }} </td>
				<td>{{ $sell->memberName }} </td>
				<td>{{ $sell->price }}</td>
				<td>{{ $sell->sellDate }} </td>

			</tr>
			@endforeach
		</tbody>
	</table>
		<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
  	<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
  	<script>
  		$(document).ready(function() {
    	$('#sell').DataTable();
		} );
  	</script>

	</div>

@stop