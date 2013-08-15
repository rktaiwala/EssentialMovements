@extends('layouts.master')

@section('title')

@parent 
| Home
@stop

@section('content')
<div id="wrapper">

<!--  Wrapper -->		
	<!-- Search Section -->
	@if ($message = Session::get('success'))
		<div class="alert alert-success alert-block">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<h4>Success</h4>
			{{ $message }} 
		</div>
	@endif
	
	

	<section class="searchbar">
		<div class="search_input input-append">
			<input type="text" placeholder="Search" width="259" height="27">
			<button class="btn" type="submit"><i class="icon-search"></i></button>
		</div>
	</section>

	<!--  Sidebar Content	-->
	<nav class="home_sidebar">
			
		<img class="categories_ribbon" src="img/categories.png" width="240" height="44" alt=""/>
			
		<ul class="categories_list">
			<li><a href="#">New Releases</a></li>
			<li><a href="#">House</a></li>
			<li><a href="#">Classics</a></li>
			<li><a href="#">Nu-Jazz</a></li>
			<li><a href="#">Promos</a></li>
		</ul>
					
		<img class="specials_ribbon" src="img/specials.png" width="240" height="44" alt=""/>	
			
		<ul class="specials_list">
			<li><a href="#"><img class="specials_photo" src="img/covers/226365.jpg" width="175" height="175" alt=""/></a></li>
			<li><a href="#"><img class="specials_photo" src="img/covers/226508.jpg" width="175" height="175" alt=""/></a></li>
			<li><a href="#"><img class="specials_photo" src="img/covers/223678.jpg" width="175" height="175" alt=""/></a></li>
		</ul>
	</nav>
	<br />
	<!--  End Of Sidebar Content -->
<!--  CTA Section / Image Carousel -->
	<section class="cta pull-right">
    	<div id="myCarousel" class="carousel slide">
      		<div class"carousel-inner">
      			<div class="item">
      				<img src="img/cta.jpg" width="710" height="320" alt=""/>
      			</div>
      			
      			<a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
      			<a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>

      		</div>
      	</div>
	</section>
	<!-- End CTA Section / Image Carousel -->
	
	<!-- Album Section -->
	<section class="tabbable span9">
		<ul class="nav-tabs">
			<li class="active"><a class="hot_tab" href="#tab1" data-toggle="tab">Whats Hot</a></li>
			<li><a href="#tab2" data-toggle="tab">Promos</a></li>
			<li><a href="#tab3" data-toggle="tab">New Releases</a></li>
		</ul>

		<div class="content tab-content">
			<div class="tab-pane active" id="tab1">
				@foreach($products as $product)
					<article class="album">
						<img src="{{ $product->image }}" width="115" height="90" alt=""/>
						<h1 class="title artist_name">{{ $product->artist }}</h1>
						<h2 class="title album_title">{{ $product->name }}</h2>
						<h3 class="title album_price">${{ $product->price }}</h3>
					</article>
				@endforeach
			</div>
			<br />
			<br />
			<!-- <div class="pagination">
					<ul>
						<li class="orange"><a href="#">Prev</a></li>
						<li><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li class="orange"><a href="#">Next</a></li>
					</ul>		
				</div>
				<hr id="pagination_hr"> -->
		</div>
	</section>
</div>		
@stop