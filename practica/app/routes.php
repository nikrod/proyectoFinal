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



Route::Controller('Alumnos','alumnosController');
Route::Controller('Profesor','profesorController');
Route::Controller('Administrador','administradorController');
Route::Controller('Archivo','ArchivosController');
Route::get('/administrador', 'loginController@showAdministrador');
Route::get('/profesor', 'loginController@showProfesor');
Route::get('/alumno', 'loginController@showAlumno');
Route::controller("/login","loginController");
Route::controller("/","loginController");
Route::get('/',function()
{
    return View::make('index');
});