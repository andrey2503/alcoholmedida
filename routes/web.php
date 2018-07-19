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

Auth::routes();

//rutas accessibles slo si el usuario no se ha logueado
    
  Route::post('login', ['as' =>'login', 'uses' => 'Auth\LoginController@postLogin']);
      Route::get('/', function () {
        return view('auth.login');
      });
    Route::get('/login', function () {
      return view('auth.login');
      });
  Route::get('/user', 'Auth\LoginController@iniciarUsuarioAdmin');


Route::group(['middleware' => ['auth']], function () {
    Route::get('/administrador','AdminController@index');
    Route::get('/salir','AdminController@getLogout');
    Route::get('/modificarUsuario/{id}','AdminController@show');
    Route::post('/modificarUsuario','AdminController@update');
    
    
    
    
});




