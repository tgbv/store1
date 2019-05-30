<?php

/*
*	Website
*/
Route::get('/', 'Index@index');

/*
*	Cart stuff
*/
Route::get('/cart/{id}/add', 'Cart@create');
Route::middleware('CartCheck') -> group(function()
{
	Route::get('/cart', 'Cart@index');
	Route::get('/cart/nfo', 'Cart@nfo');
	Route::get('/cart/{id}/remove', 'Cart@delete');
	Route::post('/cart/nfo', 'Order@create');
});

/*
*	Products stuff
*/
Route::get('/products/{id}', 'Products@read');

/*
*	Ajax stuff
*/
Route::get('/ajax/cities/{params}', 'Ajax@cities');

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

			Route::get('/orders/{status}', 'Area51\Orders@index');
		});

	//});
});


/*
*	Static
*/
Route::get('/static/{fname}', 'Storage@read');