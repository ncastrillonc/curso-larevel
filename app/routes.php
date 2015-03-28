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

Route::get('/natha.chara', function()
{
        // VISTA 'prueba'hello' de la carpeta views
        return View::make('perfil.profile')
            ->with("nombre", "Nathalie");
});

Route::get('/test', function()
{
        // VISTA 'prueba'hello' de la carpeta views
        return View::make('masterpage.template')
                ->with("nombre", "Nata");
});

// Simepre se debe regitrar cada controlador
Route::controller('personal', 'PersonalController');
Route::controller('clase', 'Clase2Controller');
