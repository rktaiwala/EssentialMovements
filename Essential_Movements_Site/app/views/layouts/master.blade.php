<!doctype html>
<html lang="en">
	<head>
		<title>
			@section('title')
			Essential Movements
			@show
		</title>
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- CSS Is Placed here -->
		{{ HTML::style('css/style.css') }}
		{{ HTML::style('css/bootstrap.css') }}
		{{ HTML::style('css/flat-ui.css')}}
	</head>
	<body>
		
			<!-- Navbar -->
			<div class="navbar navbar-inverse navbar-fixed-top">
				<div class="navbar-inner">
					<div class="container">
						<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
							<span class="icon-bar"</span>
							<span class="icon-bar"</span>
							<span class="icon-bar"</span>
						</button>

						<a class="brand" href="{{{ URL::to('/') }}}">Essential Movements</a>

						<!-- Everything you want hidden at 940px or less, place within here -->
						<div class="nav-collapse collapse">
							<ul class="nav pull-right">
								
								<li class="global_nav_li"><a href="{{{ URL::to('reviews') }}}" class="global_nav_a">REVIEWS</a></li>
								<li class="global_nav_li"><a href="{{{ URL::to('archives') }}}" class="global_nav_a">ARCHIVES</a></li>
							
								@if( Auth::guest() )
									
								<li class="global_nav_li"><a href="{{{ URL::to('login') }}}" class"global_nav_a">LOGIN</a></li>
								<li class="global_nav_li"><a href="{{{ URL::to('signup') }}}" class="global_nav_a">SIGNUP</a></li>
								@else
								<li class="global_nav_li"><a href="{{{ URL::to('radio') }}}" class"global_nav_a">RADIO</a></li>
								<li class="global_nav_li"><a href="{{{ URL::to('logout') }}}" class"global_nav_a">LOGOUT</a></li>
								<li class="global_nav_li"><a href="{{{ URL::to('') }}}" class="global_nav_a">CART<a/></li>
								@endif 
								
									<!-- <li class="nav_main_li"><a href="{{{ URL::to('') }}}" class-"">RADIO</a></li>			
									@if ( Auth::guest() )
									<li class="nav_main_li">{{ HTML::link('login', 'LOGIN') }}</li>
									@else
									<li class="main_nav_li">{{ HTML::link('logout', 'LOGOUT') }}</li>
									@endif -->
								
								
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- End Of NavBar  -->
			
			
			<!-- Success Message --> 
			@if ($message = Session::get('success'))
				<div class="alert alert-success alert-block">
					<button type="button" class="close" data-dismiss="alert">&times;</button>
					<h4>Success</h4>
					{{ $message }} 
				</div>
			@endif

			<!-- Content -->
			@yield('content')

		

			<div class="navbar navbar-fixed-bottom footer">
				<p class="credit">Essental Movements &copy; 2013</p>
			</div>
		
		<!-- Scripts Are Placed Here -->
		
		{{ HTML::script('js/jquery-1.10.1.min.js') }}
		{{ HTML::script('js/jquery-1.10.1.js') }}
		{{ HTML::script('js/bootstrap-transition.js') }}
		{{ HTML::script('js/bootstrap-alert.js') }}
		{{ HTML::script('js/bootstrap-modal.js') }}
		{{ HTML::script('js/bootstrap-dropdown.js') }}
		{{ HTML::script('js/bootstrap-scollspy.js') }}
		{{ HTML::script('js/bootstrap-tab.js') }}
		{{ HTML::script('js/bootstrap-tooltip') }}
		{{ HTML::script('js/bootstrap-popover.js') }}
		{{ HTML::script('js/bootstrap-button.js') }}
		{{ HTML::script('js/bootstrap-collapse.js') }}
		{{ HTML::script('js/bootstrap-carousel.js') }}
		{{ HTML::script('js/bootstrap-typehead.js') }}
	</body>
</html> 