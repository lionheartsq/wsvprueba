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
Route::get("/medico/listar", "MedicoController@indexMedico");
Route::get("/medico/getInfo", "MedicoController@infoMedico");
Route::get("/medico/crear", "MedicoController@crearMedico");
//Route::post("/medico/crear", "MedicoController@crearMedico");
Route::get("/medico/editar", "MedicoController@editarMedico");
//Route::put("/medico/editar", "MedicoController@editarMedico");
Route::get("/medico/eliminar", "MedicoController@eliminarMedico");
//Route::put("/medico/eliminar", "MedicoController@eliminarMedico");

Route::get("/paciente/listar", "PacienteController@indexPaciente");
Route::get("/paciente/getInfo", "PacienteController@infoPaciente");
Route::get("/paciente/crear", "PacienteController@crearPaciente");
//Route::post("/paciente/crear", "PacienteController@crearPaciente");
Route::get("/paciente/editar", "PacienteController@editarPaciente");
//Route::put("/paciente/editar", "PacienteController@editarPaciente");
Route::get("/paciente/eliminar", "PacienteController@eliminarPaciente");
//Route::put("/paciente/eliminar", "PacienteController@eliminarPaciente");
