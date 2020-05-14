<?php

use Illuminate\Support\Facades\Route;
use App\Mail\NewUserWelcomeMail;

Route::get('/email', function () {
	return new NewUserWelcomeMail();
});

/**
*@description: home
*/
Route::get('/', 'HomeController@index')->name('home.index');

/**
*@description: authentication
*/
Route::get('/register', 'AuthController@getSignUp')->name('user.register');
Route::post('/register', 'AuthController@postSignUp')->name('user.postSignUp');
Route::get('/login', 'AuthController@getSignIn')->name('user.login');
Route::post('/login', 'AuthController@postSignIn')->name('user.postSignIn');
Route::get('/logout', 'AuthController@getLogout')->name('user.logout');

/**
*@description: profile
*/
Route::get('/profile/create', 'ProfilesController@create')->name('profile.create');
Route::post('/profile', 'ProfilesController@store')->name('profile.store');
Route::get('/profile/{user}', 'ProfilesController@show')->name('profile.show');
Route::get('/profile/{user}/edit', 'ProfilesController@edit')->name('profile.edit');
Route::patch('/profile/{user}', 'ProfilesController@update')->name('profile.update');

/**
*@description: post
*/
// Route::group(['middleware' => 'auth'], function() {
	Route::get('/post/create', 'PostController@create')->name('post.create');
	Route::post('/post', 'PostController@store')->name('post.store');
	Route::get('/post/{post}', 'PostController@show')->name('post.show');
// });
