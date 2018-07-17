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

Route::get('/', function () {
    return view('welcome');
});

Route::get('printit', 'indexController@index');
Route::get('busqueda', 'busquedaController@buscar');

Route::get('printit/registro','registroController@registro');
Route::get('miPerfil','perfilController@miPerfil');
// Route::get('printit/bienvenido','homeController@home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




Route::get('logout','Auth\LoginController@logout');
