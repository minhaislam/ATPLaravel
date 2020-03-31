<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>	

	<h1>Welcome Home!</h1>&nbsp
	<a href="{{route('home.list')}}">Back</a> |
	<a href="/logout">Logout</a> 

	<br>
	<table border="1">
		<tr>
			<td>ID</td>
			<td>{{ $std->id }}</td>
		</tr>
		<tr>
			<td>Name</td>
			<td>{{$std->fullname}}</td>
		</tr>
		<tr>
			<td>CGPA</td>
			<td>{{$std->userid}}</td>
		</tr>
		<tr>
			<td>DEPT</td>
			<td>{{$std->type}}</td>
		</tr>
	</table>

</body>
</html>