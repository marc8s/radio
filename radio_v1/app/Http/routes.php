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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/usuarios', 'RadioController@index');

/*Route::get('/programacao.blade.php', function () {
    return view('programacao');
});

Route::get('/welcome.blade.php', function () {
    return view('welcome');
});*/
