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
	/*
	*	Login
	*/
	Route::get('/', 'Area51\Index@index');
	Route::get('/login', 'Auth\LoginController@showLoginForm') -> name('login');
	Route::post('/login', 'Auth\LoginController@login');

	/*
	*	Registration (available once)
	*/
	Route::get('/register', 'Auth\RegisterController@showRegistrationForm') -> name('register');
	Route::post('/register', 'Auth\RegisterController@create');

	/*
	*	Logout
	*/
	Route::get('/logout', 'Auth\LoginController@logout');

	/*
	*	Dashboard
	*/
	//Route::middleware('auth') -> group(function()
	//{
		Route::prefix('dash') -> group(function() 
		{
			Route::get('/', 'Area51\Dash@index');
			Route::post('/', 'Area51\Dash@create');		

			Route::get('/edit/{id}', 'Area51\Dash@read');
			Route::patch('/edit/{id}', 'Area51\Dash@update');
			Route::get('/delete/{id}', 'Area51\Dash@delete');
		});

	//});
});


/*
*	Static
*/
Route::get('/static/{fname}', 'Storage@read');