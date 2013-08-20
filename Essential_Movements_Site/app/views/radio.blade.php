@extends('layouts.master')

@section('title')

@parent
| Radio
@stop

@section('content')

<div id="wrapper">
	
	<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="600" height="410" id="myFlashPlayer">
		<param name="movie" value="../flash/stream.swf" />
		<param name="quality" value="high" />
		
		<!--[if !IE]>-->
		<object type="application/x-shockwave-flash" data="../flash/stream.swf" width="600" height="410">
			<param name="quality" value="high" />
		<!--<![endif]-->
					
			<a href="http://www.adobe.com/go/getflashplayer">
				<img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" />
			</a>
		<!--[if !IE]>-->
		</object>
		<!--<![endif]-->
	</object>

</div>

@stop