<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('home');
	}
	public function showReviews()
	{
		return View::make('reviews');
	}
	public function showArchives()
	{
		return View::make('archives');
	}
	public function showRadio()
	{
		return View::make('radio');
	}
	public function showSignup()
	{
		return View::make('signup');
	}
	public function showCart()
	{
		return View::make('cart');
	}
	public function showSecret()
	{
		return View::make('secret');
	}
}