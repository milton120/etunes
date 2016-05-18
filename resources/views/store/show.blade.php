@extends('layouts.master')

@section('title','Store')

@section('content')
<h3>this is store.show page</h3>

	<h3> list of song <h3>
	<table id = "storeTable">
		<thead>
			<tr>
				<th>Member Id</th>
				<th>Member Name</th>
				<th>email</th>
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

@stop

<!--
@push('scripts')

<script type="text/javascript">
	$(document).ready(function() {
    $('#storeTable').DataTable();
} );

</script>
</script>

@endpush -->