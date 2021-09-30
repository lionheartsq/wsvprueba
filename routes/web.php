<?php

use Illuminate\Support\Facades\Route;

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

Route::get("/medico/getInfo", "PersonaController@indexMedico");
Route::post("/medico/crear", "PersonaController@crearMedico");
Route::put("/medico/editar", "PersonaController@editarMedico");
Route::put("/medico/eliminar", "PersonaController@eliminarMedico");

Route::get("/paciente/getInfo", "PersonaController@indexPaciente");
Route::post("/paciente/crear", "PersonaController@crearPaciente");
Route::put("/paciente/editar", "PersonaController@editarPaciente");
Route::put("/paciente/eliminar", "PersonaController@eliminarPaciente");
