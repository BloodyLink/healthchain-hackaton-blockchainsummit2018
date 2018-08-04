<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistroMedicoController extends Controller
{
    public function getRegistroMedicoByPacienteId(){
        $registro = file_get_contents('http://10.13.3.161:3000/api/registroMedico/' . $id);
        $response = json_decode($registro, true);
        return view('paciente_detalle', ['registro' => $response]);
    }
}
