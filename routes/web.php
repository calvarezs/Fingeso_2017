<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/Convenio', 'ConvenioController@index')->name('Convenio');

Route::get('/Actividades','ActividadController@index')->name('Actividades');

Route::get('/CrearActividades','ActividadController@Registrar')->name('CreateActividad');
Route::get('/HistorialActividades','ActividadController@Historial')->name('HistorialActividad');


Route::get('/Evaluaciones','EvaluacionController@index')->name('Evaluaciones');