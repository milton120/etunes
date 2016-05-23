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
				<th>Member Id</th>
				<th>Member Name</th>
				<th>email</th>
				<th>update</th>
				<th>Delete</th>
			</tr>
		</thead>
		<tbody>
			@foreach($members as $member)
			<tr>
				<td>{{ $member->memberId }} </td>
				<td>{{ $member->memberName }} </td>
				<td>{{ $member->email }} </td>
				<td><a href= "{{ url('/').'/'.'member/'.$member->memberId.'/edit' }}" > Edit </a></td>
				<td>
					<form action= "{{ url('/').'/'.'member/'.$member->memberId }}" method="POST">
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