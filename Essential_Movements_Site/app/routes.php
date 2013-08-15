<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

//Navigation
Route::get('/', 'HomeController@showWelcome');
Route::get('reviews', 'HomeController@showReviews');
Route::get('archives', 'HomeController@showArchives');
Route::get('radio', 'HomeController@showRadio');
Route::get('cart', 'HomeController@showCart');

//Authentication
Route::get('login', array('as' => 'login', 'uses' => 'AuthController@showLogin'));
Route::post('login', 'AuthController@postLogin');
Route::get('logout', 'AuthController@getLogout');
Route::get('signup', array('as' => 'signup', 'uses' => 'AuthController@showSignup'));
Route::post('signup', 'AuthController@postRegister');

// Secure Routes
Route::group(array('before' => 'auth'), function ()
{
	Route::get('secret', 'HomeController@showSecret');
});

Route::get('wiki', function() { return Redirect::to('wiki/Home'); });
Route::get('wiki/{page}', 'WikiController@showPage');

// Shopping Cart Routes

Route::controller('cartview/{any}', 'ShpcartViewController');
Route::controller('shpcart', 'ShpcartHomeController');
// Route::controller('wishlist', 'ShpcartWishlistController');
Route::controller('cart', 'ShpCartController');




Route::resource('products', 'ProductsController');