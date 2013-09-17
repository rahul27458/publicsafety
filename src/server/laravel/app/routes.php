<?php
Route::group(array('prefix' => 'api/v1'), function()
{
        Route::post('user/login', 'HaiyyaUserController@login');
        Route::resource('user', 'HaiyyaUserController');
        Route::resource('connection', 'ConnectionController');
        Route::resource('alert', 'AlertController');
        Route::resource('alertevent', 'AlertEventController');
});
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

Route::get('/', function()
{
        return View::make('hello');
});

Route::get('authtest', array('before' => 'auth.basic', function()
{
        return View::make('hello');
}));

/*Route::group(array('prefix' => 'api/v1', 'before' => 'auth.basic'), function()
{
        Route::resource('user', 'HaiyyaUserController', array('only' => 'create'));

        Route::group(array('before' => 'auth.basic'), function()
        {
                Route::resource('user', 'HaiyyaUserController', array('except' => array('create')));
                Route::resource('connection', 'ConnectionController');
                Route::resource('alert', 'AlertController');
                Route::resource('alertevent', 'AlertEventController');
        });
});
 */

