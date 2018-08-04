<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AtencionMedicaController extends Controller
{
    public function getAtencionesByPaciente($pacienteId){
        //
    }

    public function addAtencionToPaciente(Request $request){
        dd($request);
    }
}
