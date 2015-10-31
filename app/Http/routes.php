<?php

Route::get('auth/register', 'Auth\AuthController@getRegister');

Route::get('auth/login', 'Auth\AuthController@getLogin');

Route::get('auth/logout', 'Auth\AuthController@getLogout');

Route::bind('songs', function($slug){
	return App\Songs::whereSlug($slug)->first();
}); //closure

Route::get('/', 'SongController@index');

Route::get('songs/{slug}','SongController@show');

Route::get('songs/{slug}/edit','SongController@edit');

