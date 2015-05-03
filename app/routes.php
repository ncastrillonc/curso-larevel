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

Route::get('/profile', array('before' => 'auth', function()
{
        
}));

Route::get('/login', function()
{
        // VISTA 'prueba'hello' de la carpeta views
        return View::make('general.login');
});

Route::post('/loguear', function()
{
        $email = Input::get('login');
        $password = Input::get('password');
        
        if (Auth::attempt(array('correo' => $email, 'password' => $password))) {
            return Redirect::to("/profile");
        } else {
            echo 'No logueado ';
        }
});

Route::get('/logout', function()
{
        /*Auth::logout();
        Session::flush();
        return Redirect::to('/login');
        */
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

Route::group(array('before' => 'auth'), function(){
    Route::controller('publicacion', 'PublicacionController');
    Route::controller('profile', 'ProfileController');
});