<!DOCTYPE html>
<html>
<head>
	<title>Sign up message</title>
</head>
<body>


@if(session('return_val'))
<h1>
{{session('return_val')}}
{{session('message')}}
</h1>

@else

<h1 align="center">404 ERROR, PAGE NOT FOUND</h1>


@endif



</body>
</html>