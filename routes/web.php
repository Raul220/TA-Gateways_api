<?php

use App\Gateway;
use Illuminate\Http\Request;
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

Route::resource('/gateways', 'GatewayController');
Route::post('/gateways/add', 'GatewayController@add');
Route::post('/gateways/get-by-id', 'GatewayController@get');
Route::post('/gateways/update', 'GatewayController@modify');
Route::post('/gateways/destroy', 'GatewayController@destroy');
Route::post('/peripherals/add', 'PeripheralController@add');
