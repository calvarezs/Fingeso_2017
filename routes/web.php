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


Route::get('/ConvenioDirector', 'ConvenioController@index2')->name('Convenio2');

Route::get('/Validar', 'ConvenioController@validar')->name('validar');

Route::get('/CrearConvenio', 'ConvenioController@create')->name('CreateConvenio');

Route::get('/VerConvenio','ConvenioController@ver')->name('VerConvenio');


Route::get('/RevisarConvenio','ConvenioController@revisar')->name('RevisarConvenio');


Route::get('/HistorialConvenio','ConvenioController@historial')->name('historialConvenio');

Route::get('/HistorialConvenioDirector','ConvenioController@historial2')->name('DhistorialConvenio');
Route::post('/DetallesConvenio','ConvenioController@detalles')->name('DetallesConvenio');

Route::get('/Actividades','ActividadController@index')->name('Actividades');

Route::get('/CrearActividades','ActividadController@Registrar')->name('CreateActividad');
Route::post('CrearActividades','ActividadController@RegistrarNuevaActividad')->name('CrearNuevaActividad');

Route::get('/HistorialActividades','ActividadController@Historial')->name('HistorialActividad');

//
Route::get('/Evaluaciones','EvaluacionController@index')->name('Evaluaciones');


Route::get('/HistorialEvaluaciones','EvaluacionController@ver')->name('HEvaluaciones');


Route::get('/EvaluacionesDepartamento','EvaluacionController@ver_departamento')->name('DepartamentoEvaluaciones');


Route::get('/EvaluacionesFacultad','EvaluacionController@ver_facultad')->name('FacultadEvaluaciones');
//
Route::get('/Apelaciones','EvaluacionController@apelacion')->name('Apelaciones');

Route::get('/EvaluacionesLista','EvaluacionController@evaluaciones_departamento')->name('Edepartamento');
Route::get('/EvaluacionesHistorial','EvaluacionController@historial_departamento')->name('hDepartamento');

Route::get('/AgregarEvaluacionDepartamento','EvaluacionController@detalles_evaluacion_departamento')->name('ADepartamento');


Route::get('/AgregarEvaluacionFacultad','EvaluacionController@detalles_evaluacion_Facultad')->name('AFacultad');

Route::get('/FvaluacionesLista','EvaluacionController@Evaluaciones_facultad')->name('Fdepartamento');

Route::get('/VerApelaciones','EvaluacionController@ver_apelaciones')->name('VerApelacion');

Route::get('/ApelacionesDetalles','EvaluacionController@detalles_apelaciones')->name('DetallesApelacion');

Route::get('/HistorialApelacion','EvaluacionController@historial_apelaciones')->name('HApelacion');



Route::get('/HistorialEvaluacionesFacultad','EvaluacionController@historial_facultad')->name('HEvaluacionF');


Route::post('/mostrar','ActividadController@new_actividades')->name('NewActividades');


Route::post('/newConvenio','ConvenioController@new_convenio')->name('newConvenio');