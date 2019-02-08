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

Route::get('/', 'Auth\LoginController@showLoginForm')->name('login');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

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