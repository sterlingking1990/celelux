@extends('layouts.mainlayout')

@section('content')
	<h1> This reflects sign in page from mock up called: fans_signinpage</h1>



	
	
	{!! Form::open(['action' => 'FansController@processsignin','method'=>'POST']) !!}
	<div class="form-group">
	
		{{Form::label('ig_handle','Enter IG Handle')}}
		{{ Form::text('textid') }}
	</div>
	<div class="uk-column-1-3">
		{{ Form::label('password','Enter Password')}} 
		{{ Form::password('password') }}
	</div>

		{{ Form::submit("Ok") }}
		
	{!! Form::close() !!}
@endsection