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
    return 'Bienvenido';
});

//rutas invitados


Route::get('/api/hombre','invitController@primero');
Route::get('/api/mujer','invitController@segundo');
Route::get('/api/datos','invitController@tercero');
Route::get('/api/fiesta','invitController@cuarto');
Route::get('/api/discoteca','invitController@quinto');
//prueba invitados
Route::get('/api/invitar','invitController@index');
Route::post('/api/invitar/guardar','invitController@store')->name('guardar');
Route::put('/api/invitar/actualizar','invitController@update')->name('actualizar');
Route::delete('/api/invitar/eliminar','invitController@delete')->name('eliminar');
//recepcion
Route::get('/api/recibir','recepcionController@index');
Route::post('/api/recibir/guardar','recepcionController@store')->name('guardar');
Route::put('/api/recibir/actualizar','recepcionController@update')->name('actualizar');
Route::delete('/api/recibirr/eliminar','recepcionController@delete')->name('eliminar');


