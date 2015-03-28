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

Route::get('/dia', function()
{
        // VISTA prueba de la carpeta views
	return View::make('diagramar');
});

Route::get('/test', function()
{
        // VISTA prueba de la carpeta views
	return View::make('ejemplo');
});

Route::get('/task', function()
{
        // VISTA prueba de la carpeta views
	return View::make('tarea1');
});

Route::get('/task2', function()
{
        // VISTA prueba de la carpeta views
	return View::make('tarea1_v2');
});

// Simepre se debe regitrar cada controlador
Route::controller('personal', 'PersonalController');
Route::controller('clase', 'Clase2Controller');
