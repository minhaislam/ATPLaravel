<!DOCTYPE html>
<html>
<head>
	<title>Admin Home</title>
</head>
<body>	

	<h1>User list</h1>&nbsp
	<a href="{{route('home.index')}}">Back</a> |
	<a href="/logout">Logout</a> 

	<br>
	<table border="1">
		<tr>
			<th>ID</th>
			<th>Full NAME</th>
			<th>User Id</th>
			<th>Type</th>
			<th>Action</th>
			
		</tr>

		
		
		@foreach($std as $s)
		<tr>
			<td>{{ $s->id }}</td>
			<td>{{ $s->fullname }}</td>
			<td>{{ $s->userid }}</td>
			<td>{{ $s->type }}</td>
			<td>
				<a href="{{route('home.show', $s->id)}}">DETAILS</a> |
				<a href="{{route('home.edit', $s->id)}}">EDIT</a> |
				<a href="{{route('home.delete', $s->id)}}">DELETE</a>
			</td>
		</tr>
		@endforeach

	</table>


</body>
</html>