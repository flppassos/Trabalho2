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

Route::get('/', 'MachineController@machines');

Route::get('/machines/form-adicionar', 'MachineController@formAdicionar');
Route::post('/machines/adicionar', 'MachineController@adicionar');
Route::get('/machines/excluir/{id}', 'MachineController@excluir');
Route::get('/machines/editar/{id}', 'MachineController@form_editar');
Route::post('/machines/editar', 'MachineController@editar');
