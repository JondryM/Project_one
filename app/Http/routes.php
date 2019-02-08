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
/** Rutas para Funcionarios **/
Route::get('/', function () {
    return view('historial.funcionarios.index');
});

Route::resource('/historial/funcionarios','FuncionariosController');
Route::get('/historial/funcionarios/edit/{idfuncionario}','FuncionariosController@edit');
Route::get('/historial/funcionarios/borrar_funcionario/{id}','FuncionariosController@delete');
Route::post('/historial/funcionarios/updateser','FuncionariosController@update');


/** Rutas para las Hisorias Medicas **/

Route::get('/', function () {
    return view('historial.historia.index');
});

Route::resource('/historial/historia','HistoriaController');
Route::get('/historial/historia/edit/{idHistoria}','HistoriaController@edit');
Route::get('/historial/historia/borrar_historia/{id}','HistoriaController@delete');
Route::post('/historial/historia/updateser','HistoriaController@update');

/** Rutas para inventario de Medicamentos **/
Route::get('/', function () {
    return view('historial.medicamentos.index');
});
Route::resource('/historial/medicamentos','MedicamentosController');
Route::get('/historial/medicamentos/edit/{idHistoria}','MedicamentosController@edit');
Route::get('/historial/medicamentos/borrar_medicamento/{id}','MedicamentosController@delete');
Route::post('/historial/medicamentos/updateser','MedicamentosController@update');




/**Route::get('/dashboard', 'Dashboard@index');**/
