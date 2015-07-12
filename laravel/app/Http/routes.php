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

Route::group(array('prefix'=>'/api'),function(){
	Route::get('users/latest','API\UsersController@getLatestUser');
	Route::post('users/create','API\UsersController@createUser');
	Route::post('login/auth','API\AuthController@Login');
	Route::post('login/destroy','API\AuthController@Logout');
	Route::get('guides/location', 'API\GuidesController@getGuidesByLocation');
});

Route::get('/', function () {
    return view('home.welcome');
});

Route::get('login', function () {
    return view('account.login');
});

Route::get('register', function () {
    return view('account.register');
});


	Route::post('logout','AccountController@Logout');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', ['uses' =>'DashboardController@index']);
});

Route::get('s/{location}', ['uses' =>'SearchController@searchGuides']);


Blade::setEscapedContentTags('[[', ']]');
Blade::setContentTags('[[[', ']]]');