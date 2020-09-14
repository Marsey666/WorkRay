<?php

use Illuminate\Support\Facades\Route;

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
    return view('layout');
});
//Para mostrar lista por lista
//Route::get('/empleados', 'EmpleadoController@index');
//Route::get('/empleados/create','EmpleadoController@create');
//Para mostrar todo los metodos de un controller ↓↓↓
Route::resource('empleados', 'EmpleadoController');
Route::resource('integrantes', 'IntegranteController');