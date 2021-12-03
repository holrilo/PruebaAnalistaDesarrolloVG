<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/clientes/consultar','App\Http\Controllers\ApiClienteController@index');
Route::post('/clientes/crear','App\Http\Controllers\ApiClienteController@store');
Route::put('/clientes/{id}','App\Http\Controllers\ApiClienteController@update');
Route::delete('/clientes/{id}','App\Http\Controllers\ApiClienteController@destroy');
