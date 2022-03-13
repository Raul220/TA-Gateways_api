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

Route::get('/gateways', 'GatewayController@index');
Route::post('/gateways/add', 'GatewayController@add');
Route::post('/gateways/show', 'GatewayController@show');
Route::post('/gateways/update', 'GatewayController@update');
Route::post('/peripherals/add', 'PeripheralController@add');

// Route::get('/gateways/show', function () {
//     $gateway = Gateway::where('id' == 1)->with('peripherals')->get();
//     // $peripherals = $gateway->peripherals()->get();
//     return json_encode(array('statusCode' => 200, 'gateway' => $gateway));
// });
