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

Route::get('/asign-pato', function()
{
    $asignatura = Asignatura::find(1);
    return View::make('test.asignatura-show')->with('asignatura', $asignatura);
});

Route::resource('alumnos', 'AlumnosController');
Route::resource('archivos', 'ArchivosController');

//Route::Controller('Alumnos','alumnosController');
Route::Controller('Profesor','profesorController');
Route::Controller('Asignaturas','AsignaturasController');
Route::Controller('Administrador','administradorController');
Route::Controller('Archivo','ArchivosController');
Route::Controller("/login","loginController");
Route::Controller("/","loginController");


Route::get('/',function()
{
    return View::make('index');
});

