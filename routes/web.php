<?php

use \App\Articulo;
use \App\Cliente;
use \App\Calificaciones;

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

Route::get('/gateways', 'GatewayController@index');
// Route::post('/gateways', 'MyController@all');
Route::post('/gateways/add', 'MyController@add');