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
Route::auth();
Route::get('/', function () {
    return view('welcome');
});

/* Si se desea agregar la url de login a la ruta /home habilitar el siguiente bloque */

/*
Route::auth();

Route::get('/home', 'HomeController@index');
*/
