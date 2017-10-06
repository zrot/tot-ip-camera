<?php

Route::get('/', 'HomeController@index')->name('dashboard');

Route::get('/temp', 'HomeController@template')->name('template');

Route::get('/camera', 'CameraController@index')->name('camera');

Route::get('/monitor', 'MonitorController@index')->name('monitor');

Route::get('/grouplist', 'GrouplistController@index')->name('grouplist');

Route::get('/sharedaccess', 'SharedAccessController@index')->name('shared');

Route::get('/category', 'CategoryController@index')->name('category');

Route::get('/user', 'userController@index')->name('user');

Route::get('/charts', function()
{
	return View::make('mcharts');
});

Route::get('/tables', function()
{
	return View::make('table');
});

Route::get('/forms', function()
{
	return View::make('form');
});

Route::get('/grid', function()
{
	return View::make('grid');
});

Route::get('/buttons', function()
{
	return View::make('buttons');
});


Route::get('/icons', function()
{
	return View::make('icons');
});

Route::get('/panels', function()
{
	return View::make('panel');
});

Route::get('/typography', function()
{
	return View::make('typography');
});

Route::get('/notifications', function()
{
	return View::make('notifications');
});

Route::get('/blank', function()
{
	return View::make('blank');
});

Route::get('/login', function()
{
	return View::make('login');
});

Route::get('/documentation', function()
{
	return View::make('documentation');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
