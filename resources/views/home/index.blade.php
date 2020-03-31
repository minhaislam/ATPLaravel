<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>	

	<h1>Welcome Home! {{session('fullname')}}</h1>  
	<br>
	<a href="{{route('add.user')}}">Create user</a> |
	<a href="{{route('home.list')}}">View Users</a> |
	<a href="/logout">Logout</a> 

	<br>


</body>
</html>