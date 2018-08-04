<?php

use App\Http\Controllers\PacienteController;
use App\Http\Controllers\AtencionMedicaController;

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

Route::get('/', 'EspecialistaController@getEspecialistas');
Route::get('/especialista/{Id}/pacientes/', function($id){
    $pacienteController = new PacienteController;
    return $pacienteController->getPacientesByAuthorizedEspecialista($id);
});

Route::get('/paciente/{id}', function($id){
    $pacienteController = new PacienteController;
    return $pacienteController->getPacienteDataByid($id);
});

Route::get('/add_atencion/{id}', function ($id){
    return view('add_atencion', ['paciente_id' => $id]);
});


