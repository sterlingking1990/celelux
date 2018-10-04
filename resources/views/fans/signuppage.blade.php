<!DOCTYPE html>
<html>
<head>
	<title>Sign up page</title>
</head>
<body>

<h1>This reflects fans_signuppage on mockup</h1>

{!! Form::open(['action' => 'FansController@processsignup','method'=>'POST']) !!}
	
		{{Form::label("Enter IG_handle")}}
		{{ Form::text("textid") }}
		{{ Form::label("Enter password ")}} 
		{{ Form::password("password") }}
		{{ Form::label("Enter email")}}
		{{ Form::email("email")}}

		{{ Form::submit("Ok") }}
		
	{!! Form::close() !!}
</body>
</html>