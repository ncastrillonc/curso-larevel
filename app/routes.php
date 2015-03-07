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
        // VISTA 'prueba'hello' de la carpeta views
        return View::make('hello');
});

Route::get('/prueba', function()
{
        // VISTA prueba de la carpeta views
	return View::make('prueba');
});

Route::get('/prueba2', function()
{
        // VISTA prueba de la carpeta views
	return View::make('prueba2');
});

// Simepre se debe regitrar cada controlador
Route::controller('personal', 'PersonalController');
