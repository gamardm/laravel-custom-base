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

Route::get('/', function()
{

    var_dump( Sentry::getUserProvider() );

    //print_r(Sentry::getUserProvider());
    //print_r(SentryAdmin::getUserProvider());
	//return View::make('hello');
});