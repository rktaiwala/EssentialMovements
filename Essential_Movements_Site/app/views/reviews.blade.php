@extends('layouts.master')

@section('title')

@parent 
| Reviews 
@stop

@section('content')
<!-- Wrapper -->
<div id="wrapper">
	<div class="container">
	<form class="login">
		<fieldset>
			<br/>
			<br/>
			<legend>Reviews</legend>
			<div class="well well-small">
				<p class="artist_title pull-left">Artist</p>
				<p class="reviewed_title pull-left">Reviewed By</p>
			</div>
		</fieldset>
	</form>

	<div class="album_wrapper">
			<img  class="review_album_img pull-left" src="img/covers/223994.jpg" width="100" height="90" alt=""/>
			<div class="review_album_container" >
					<p class="review_artist_name">Miles Davis</p>
					<p class="review_album_title">Bitches Brew</p>
					<p class="review_record_label">Blue Note</p>
					<p class="review_album_year">1968</p>
			</div>
			<p class="reviewer_name">Ahmed Davis</p>
			<a class="readmore_link" href="#">Read More</a>
			<button class="btn pull-right button" type="button">Add To Cart</button>
		</div>
		<hr class="divider">
		<br />
		<div class="album_wrapper">
			<img  class="review_album_img pull-left" src="img/covers/226365.jpg" width="100" height="90" alt=""/>
			<div class="review_album_container" >
					<p class="review_artist_name">Miles Davis</p>
					<p class="review_album_title">Bitches Brew</p>
					<p class="review_record_label">Blue Note</p>
					<p class="review_album_year">1968</p>
			</div>
			<p class="reviewer_name">Ahmed Davis</p>
			<a class="readmore_link" href="#">Read More</a>
			<button class="btn pull-right button" type="button">Add To Cart</button>
		</div>
		<hr>
		<br />
		<div class="album_wrapper">
			<img  class="review_album_img pull-left" src="img/covers/226014.jpg" width="100" height="90" alt=""/>
			<div class="review_album_container" >
					<p class="review_artist_name">Miles Davis</p>
					<p class="review_album_title">Bitches Brew</p>
					<p class="review_record_label">Blue Note</p>
					<p class="review_album_year">1968</p>
			</div>
			<p class="reviewer_name">Ahmed Davis</p>
			<a class="readmore_link" href="#">Read More</a>
			<button class="btn pull-right button" type="button">Add To Cart</button>
		</div>
		<hr>
		<br />
		<div class="album_wrapper">
			<img  class="review_album_img pull-left" src="img/covers/225379.jpg" width="100" height="90" alt=""/>
			<div class="review_album_container" >
					<p class="review_artist_name">Miles Davis</p>
					<p class="review_album_title">Bitches Brew</p>
					<p class="review_record_label">Blue Note</p>
					<p class="review_album_year">1968</p>
			</div>
			<p class="reviewer_name">Ahmed Davis</p>
			<a class="readmore_link" href="#">Read More</a>
			<button class="btn pull-right button" type="button">Add To Cart</button>
		</div>
		<hr>
		<br />
		<div class="album_wrapper">
			<img  class="review_album_img pull-left" src="img/covers/224399.jpg" width="100" height="90" alt=""/>
			<div class="review_album_container" >
					<p class="review_artist_name">Miles Davis</p>
					<p class="review_album_title">Bitches Brew</p>
					<p class="review_record_label">Blue Note</p>
					<p class="review_album_year">1968</p>
			</div>
			<p class="reviewer_name">Ahmed Davis</p>
			<a class="readmore_link" href="#">Read More</a>
			<button class="btn pull-right button" type="button">Add To Cart</button>
		</div>
		<hr>
		<br />
		<div class="album_wrapper">
			<img  class="review_album_img pull-left" src="img/covers/224255.jpg" width="100" height="90" alt=""/>
			<div class="review_album_container" >
					<p class="review_artist_name">Miles Davis</p>
					<p class="review_album_title">Bitches Brew</p>
					<p class="review_record_label">Blue Note</p>
					<p class="review_album_year">1968</p>
			</div>
			<p class="reviewer_name">Ahmed Davis</p>
			<a class="readmore_link" href="#">Read More</a>
			<button class="btn pull-right button" type="button">Add To Cart</button>
		</div>
		<hr>
</div>
</div>
<!-- End Wrapper -->


@stop