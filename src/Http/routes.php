<?php

Route::group(['namespace' => 'Bestmomo\Installer\Http\Controllers'], function()
{
	Route::get('/', 'WelcomeController@welcome');

	Route::group(['prefix' => 'install', 'middleware' => ['web']], function()
	{
		Route::get('database', 'DatabaseController@create');
		Route::post('database', 'DatabaseController@store');
		Route::get('register', 'UserController@createUser');
		Route::post('register', 'UserController@storeUser');
		Route::get('end', 'EndController@end');
	});
});