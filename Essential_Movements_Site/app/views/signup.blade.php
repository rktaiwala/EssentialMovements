@extends('layouts.master')

@section('title')
@parent
| Signup
@stop 

{{-- Content --}}
@section('content')
<div id="wrapper">
	<div class="container">
		{{ Form::open(array('url' => 'signup')) }}
			
			<fieldset>
				<br />
				<br />
				<legend>Signup</legend>
			</fieldset>
			<br />
			<br />
			
			<!-- Form Errors -->
			@if ($errors->has())
				<p>The following errors have occured:</p>
				<ul class="form-errors">
					{{ $errors->first('username', '<li>:message</li>') }}
					{{ $errors->first('password', '<li>:message</li>') }}
					{{ $errors->first('password_confirmation', '<li>:message</li>') }}
				</ul>

			@endif
			

			<!-- First Name -->
			{{ Form::label('firstname', 'First Name', array('class' => 'control-label')) }}
			<div class="controls">
				{{ Form::text('firstname', Input::old('firstname')) }}
			</div>
			
			<!-- Last Name -->
			{{ Form::label('lastname', 'Last Name', array('class' => 'control-label')) }}
			<div class="controls">
				{{ Form::text('lastname', Input::old('lastname')) }}
			</div>

			<!-- User Name -->
			{{ Form::label('username', 'User Name', array('class' => 'control-label')) }}
			<div class="controls">
				{{ Form::text('username', Input::old('username')) }}
			</div>
		

			<!-- Email -->
			{{ Form::label('email', 'Email', array('class' => 'control-label')) }}
			<div class="controls">
				{{ Form::text('email', Input::old('email')) }}
			</div>


			<!-- Password -->
			{{ Form::label('password', 'Password', array('class' => 'control-label')) }}
			<div class="controls">
				{{ Form::password('password') }}
			</div>

			<!-- Login Button -->
			<div class="control-group">
				<div class="controls">
					{{ Form::submit('Create New Account', array('class' => 'btn')) }}
				</div>
			</div>

			<div class="reg_logo">
				<h1 class="logo_heading">Essential Movements</h1>
				<p class="logo_text">Your Number One Source For The Best In Dance Music</p>
				<img src="img/logo.png" width="389" height="380" alt=""/>
			</div>
		{{ Form::close()}}
	</div>
</div>



@stop