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
				<legend>Reviews</legend>
				<div class="well well-small">
					<h1 class="artist_title pull-left">Artist</h1>
					<h1 class="reviewed_title pull-left">Reviewed By</h1>
				</div>
			</fieldset>
		</form>

		@foreach($products as $product)
			<article class="album_wrapper">
				<img  class="review_album_img pull-left" src="{{ $product->image }}" width="100" height="90" alt=""/>
				<article class="review_album_container" >
					<p class="review_artist_name">{{ $product->artist }}</p>
					<p class="review_album_title">{{ $product->name }}</p>
					<p class="review_record_label">{{ $product->label }}</p>
					<p class="review_album_year">{{ $product->year }}</p>
				</article>
				<p class="reviewer_name">Ahmed Davis</p>
				<a class="readmore_link" href="#">Read More</a>
				<button class="btn pull-right button" type="button">Add To Cart</button>
			</article>
			<hr class="divider">
		@endforeach 
	</div>
</div>
<!-- End Wrapper -->


@stop