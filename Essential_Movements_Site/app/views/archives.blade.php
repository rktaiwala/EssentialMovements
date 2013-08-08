@extends('layouts.master')

@section('title')

@parent
| Archives
@stop

@section('content')
<div id="wrapper">
	<div class="container">
		<form class="login">
			<fieldset>
				<br/>
				<br/>
				<legend>Archives</legend>
				<div class="well well-small">
					<p class="archive_artist_title pull-left">Artist Name</p>
					<p class="archive_title pull-left">Title</p>
				</div>
				<div>
					<p class="archive_artist_name pull-left">Timmy Regisford</p>
					<p class="archive_audio_title pull-left">Live At CLub Shelter NYC</p>
					<audio controls class="pull-right">
						<source src="audio/lalah.ogg" type="audio/ogg">
						<source src="audio/lalah.mp3" type="audio/mpeg">
						Your Browser does not support the audio element.
					</audio>
				</div>
				<br/>
				<hr>
				<div>
					<p class="archive_artist_name pull-left">Timmy Regisford</p>
					<p class="archive_audio_title pull-left">Live At CLub Shelter NYC</p>
					<audio controls class="pull-right">
						<source src="audio/lalah.ogg" type="audio/ogg">
						<source src="audio/lalah.mp3" type="audio/mpeg">
						Your Browser does not support the audio element.
					</audio>
				</div>
				<br/>
				<hr>
				<div>
					<p class="archive_artist_name pull-left">Timmy Regisford</p>
					<p class="archive_audio_title pull-left">Live At CLub Shelter NYC</p>
					<audio controls class="pull-right">
						<source src="audio/lalah.ogg" type="audio/ogg">
						<source src="audio/lalah.mp3" type="audio/mpeg">
						Your Browser does not support the audio element.
					</audio>
				</div>
				<br/>
				<hr>
			</fieldset>
		</form>	

	</div>

</div>

@stop