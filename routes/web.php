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

Route::get('/demo', function () {
    return 'welcome';
});

Route::get('/invitados','invitadosController@index');
Route::get('/hombre','invitadosController@primero');
Route::get('/mujer','invitadosController@segundo');
Route::get('/datos','invitadosController@tercero');
Route::get('/fiesta','invitadosController@cuarto');
Route::get('/discoteca','invitadosController@quinto');
Route::post('/invitados/guardar','invitadosController@store')->name('guardar');
Route::put('/invitados/actualizar','invitadosController@update')->name('actualizar');
Route::delete('/invitados/eliminar','invitadosController@destroy')->name('eliminar');
