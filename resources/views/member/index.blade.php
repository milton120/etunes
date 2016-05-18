<!DOCTYPE html>
<html lang='en'>
<head>
	<meta charset="UTF-8">
	<title>etune site :: member index</title>
</head>
<body>
	<h3> list of member <h3>
	<table>
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
</body>
</html>