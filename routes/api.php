<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/tipos_licor','TipoLicorController@tipos_licor');
Route::get('/licores','LicorController@licores');
Route::get('/licor/{id}','LicorController@licor');
Route::post('/agregarLicor','LicorController@agregarLicor');




