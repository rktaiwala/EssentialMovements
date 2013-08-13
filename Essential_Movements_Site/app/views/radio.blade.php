@extends('layouts.master')

@section('title')

@parent
| Radio
@stop

@section('content')
<!-- Wrapper  -->
<div id="wrapper">
	<div class="container">
		<form class="login">
			<fieldset>
				<br />
				<br />
				<legend>Radio</legend>
			</fieldset>
			<div class="screen_container">
				<img class="screen" src="img/screen.jpg" width="500" height="241" alt=""/>
			</div>
			<div class="chat_container">
				<img class="chat" src="img/chat.jpg" width="400px" height="241" alt=""/>
			</div>
		</form>
	</div>
</div>

@stop