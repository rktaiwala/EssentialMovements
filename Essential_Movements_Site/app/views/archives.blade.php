@extends('layouts.master')

@section('title')

@parent
| Archives
@stop

@section('content')
<div id="wrapper">
	<div class="container">
		<form>
			<fieldset>
				<legend>Archives</legend>
			</fieldset>
		</form>
		<div class="well well-small">
			<h1 class="archive_artist_title">Artist Name</h1>
			<h1 class="archive_title">Title</h1>
		</div>
		
		<article class="archived_mix">
			<h2 class="archive_artist_name pull-left">Timmy Regisford</h2>
			<h2 class="archive_audio_title pull-left">Live At CLub Shelter NYC</h2>
			<audio controls class="audio_control pull-right">
				<source src="audio/lalah.ogg" type="audio/ogg">
				<source src="audio/lalah.mp3" type="audio/mpeg">
				Your Browser does not support the audio element.
			</audio>
		</article>
		<hr>		
				
		<article class="archived_mix">
			<h2 class="archive_artist_name pull-left">Timmy Regisford</h2>
			<h2 class="archive_audio_title pull-left">Live At CLub Shelter NYC</h2>
			<audio controls class="audio_control pull-right">
				<source src="audio/lalah.ogg" type="audio/ogg">
				<source src="audio/lalah.mp3" type="audio/mpeg">
				Your Browser does not support the audio element.
			</audio>
		</article>
		<hr>	
				
		<article class="archived_mix">
			<h2 class="archive_artist_name pull-left">Timmy Regisford</h2>
			<h2 class="archive_audio_title pull-left">Live At CLub Shelter NYC</h2>
			<audio controls class="audio_control pull-right">
				<source src="audio/lalah.ogg" type="audio/ogg">
				<source src="audio/lalah.mp3" type="audio/mpeg">
				Your Browser does not support the audio element.
			</audio>	
		</article>
	</div>
</div>

@stop