@extends('layouts.master')

@section('title')
@parent
| Login
@stop


{{-- Content --}}
@section('content')
<div id="wrapper">
	<div class="container">
		
		
		{{ Form::open(array('url' => 'login', 'class' => 'login_form')) }}

		<fieldset>
			<br />
			<br />
			<legend>Login</legend>
		</fieldset>
		<!-- Name -->
		<div class="control-group {{{ $errors->has('username') ? 'error' : '' }}}">
			{{ Form::label('username', 'Username', array('class' => 'control-label')) }}
			
			<div class="controls">
				{{ Form::text('username', Input::old('username')) }}
				{{ $errors->first('username') }}
			</div>
		</div>


		<!-- Password -->
		<div class="control-group {{{ $errors->has('password') ? 'error' : '' }}}">
			{{ Form::label('password', 'Password', array('class' => 'control-label')) }}

			<div class="controls">
				{{ Form::password('password') }}
				{{ $errors->first('password') }}
			</div>
		</div> 


		<!-- Login Button -->
		<div class="control-group">
			<div class="controls">
				{{ Form::submit('Login', array('class' => 'btn')) }}
			</div>
		</div>
		<div class="logo">
			<h1 class="logo_heading">Essential Movements</h1>
			<p class="logo_text">Your Number One Source For The Best In Dance Music</p>
			<img src="img/logo.png" width="389" height="380" alt=""/>
		</div>
		{{  Form::close() }}
	</div>
</div>
@stop