<?php

/*
*	Index
*/
Route::get('/', 'Index@index');

/*
*	Admin panel
*/
Route::prefix('/area51') -> group(function()
{
	Route::get('/', 'Area51\Index@index');
	Route::get('/login', 'Auth\LoginController@showLoginForm') -> name('login');
	Route::post('/login', 'Auth\LoginController@login');

	Route::get('/register', 'Auth\RegisterController@showRegistrationForm');
	Route::post('/register', 'Auth\RegisterController@create');

	Route::middleware('auth') -> group(function()
	{
		Route::prefix('dash') -> group(function() 
		{
			Route::get('/', 'Area51\Dash@index');
			Route::post('/', 'Area51\Dash@create');		

			Route::get('/edit/{id}', 'Area51\Dash@read');
			Route::patch('/edit/{id}', 'Area51\Dash@update');

			Route::get('/logout', 'Auth\LoginController@logout');
		});

	});
});


/*
*	Static
*/
Route::get('/static/{fname}', 'Storage@read');