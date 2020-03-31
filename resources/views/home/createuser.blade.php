<!DOCTYPE html>
<html>
<head>
	<title>Create User</title>
</head>
<body>

	<a href="{{route('home.index')}}">Back</a> |
	<a href="/logout">Logout</a> 
	<h1>User Registration</h1>
	<form method="post">
			<input type="hidden" name="_token" value="{{csrf_token()}}">
		
		Fullname: <input type="text" name="fullname" > <br>
		UserId: <input type="text" name="userid" > <br>
		Password: <input type="password" name="password" ><br>
		Type: <input type="text" name="type" > <br>
		<input type="submit" name="submit" value="Submit" >

	</form>



</body>
</html>