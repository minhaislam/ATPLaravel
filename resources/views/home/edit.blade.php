<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
</head>
<body>	

	<h1>Edit Page!</h1>&nbsp
	<a href="{{route('home.list')}}">Back</a> |
	<a href="/logout">Logout</a> 

	<br>
	<form method="post">
		<input type="hidden" name="_token" value="{{csrf_token()}}">
	<table border="0">
		<tr>
			<td>ID</td>
			<td><input type="text" name="id" readonly value="{{ $std->id }}"></td>
		</tr>
		<tr>
			<td>Full Name</td>
			<td><input type="text" name="fullname" value="{{ $std->fullname }}"></td>
		</tr>
		<tr>
			<td>User Id</td>
			<td><input type="text" name="userid" value="{{ $std->userid }}"></td>
		</tr>
		<tr>
			<td>Psassword</td>
			<td><input type="text" name="password" value="{{ $std->password }}"></td>
		</tr>
		<tr>
			<td>Type</td>
			<td><input type="text" name="type" value="{{ $std->type }}"></td>
		</tr>
		<tr>
			<td colspan="2"> <input type="submit" name="submit"></td>
		
		</tr>
	</table>
</form>
</body>
</html>