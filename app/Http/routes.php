<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



Route::group(['middleware' => ['web']],function(){

	Route::get('/', function () {
    	
    	return view('home');
	});

	Route::get('/about','PageController@showAboutPage');
	Route::get('/contact','PageController@showContactPage');
	Route::resource('member','MemberController');
	Route::resource('store','StoreController');
	Route::resource('cart','CartController');

	Route::get('/login','UserController@showLogin');
	Route::post('/login','UserController@postSignIn');
	Route::get('/logout','UserController@doLogout');
	Route::get('/profile','UserController@showProfile');

	Route::get('/adminmaker','AdminController@showUser');
	Route::post('/adminmaker','AdminController@setAdmin');
	Route::get('/sellhistory','AdminController@showSellHistory');

	Route::resource('genre','GenreController');
	Route::resource('company','CompanyController');
	Route::resource('album','AlbumController');
	Route::resource('artist','ArtistController');
	Route::resource('song','SongController');
	Route::resource('message','MessageController');
	Route::resource('payment','PaymentController');

});



