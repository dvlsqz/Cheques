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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Ruta del modulo de Proveedores
Route::resource('proveedor','ProveedorController');

//Ruta del modulo de Bancos
Route::resource('banco','BancoController');

//Ruta del modulo de Cuentas
Route::resource('cuenta','CuentaController');

//Ruta del modulo de Chequeras
Route::resource('chequera','ChequeraController');

//Ruta del modulo de Cheques
Route::resource('cheque','ChequeController');


