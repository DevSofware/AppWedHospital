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

Route::get('medicoIndex','MedicoController@index');
Route::post('medicoSave','MedicoController@store');

Route::get('usuarioIndex','UsuarioController@index');
Route::post('usuarioSave','UsuarioController@store');

Route::get('pacienteIndex','PacienteController@index');
Route::post('pacienteSave','PacienteController@store');

Route::get('administradorIndex','AdministradorController@index');
Route::post('administradorSave','AdministradorController@store');

Route::get('AuxiliarIndex','AuxiliarController@index');
Route::post('AuxiliarSave','AuxiliarController@store');
