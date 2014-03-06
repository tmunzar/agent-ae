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

Route::get('/', [ 'as' => 'home', function()
{
	 $cards = Card::where('published','=','1')->get();
	 $minutes = MorningMinute::all();

     return View::make('cards.index', array('cards' => $cards, 'minutes' => $minutes))->with('title', 'Home');
}]);

Route::filter('Sentry', function()
{
	if (!Sentry::check()) {
		return Redirect::home();
	}
});

Route::get('login', 'SessionsController@create');
Route::get('logout', 'SessionsController@destroy');
Route::resource('sessions','SessionsController', ['only' => ['create','store','destroy']]);


Route::resource('users','UsersController');
Route::get('register', 'UsersController@create');

Route::resource('cards','CardsController');
Route::get('submit', array('before' => 'Sentry','uses'=>'CardsController@create'));