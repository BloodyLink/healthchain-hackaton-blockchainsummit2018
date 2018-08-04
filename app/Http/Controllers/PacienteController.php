<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use App\Http\Controllers\EspecialistaController;

class PacienteController extends Controller
{
    public function getPacientesByEspecialistaAutorizado($id){

        $client = new Client(); //GuzzleHttp\Client
        $result = $client->post('http://10.13.3.161:3000/api/paciente', [
            'form_params' => [
                'sample-form-data' => 'value'
            ]
        ]);
        return view('pacientes', ['pacientes' => $result]);

    }

    public function getPacienteByid($id){
        $paciente = file_get_contents('http://10.13.3.161:3000/api/paciente/' . $id);
        $response = json_decode($paciente, true);
        return $response;
    }

    public function getPacienteDataByid($id){
        $paciente = file_get_contents('http://10.13.3.161:3000/api/paciente/' . $id);
        $response = json_decode($paciente, true);
        $registro['alergias'] = [
         [
             "alergiaNombre" => 'Mariscos',
             "alergiaReaccion" => 'Se tranca la glotis',
             "alergiaGravedad" => 'Severa'
         ],
          [
            "alergiaNombre" => 'Maní',
            "alergiaReaccion" => 'Erupción cutánea',
            "alergiaGravedad" => 'Leve'
          ],
         [
          "alergiaNombre" => 'Ibuprofeno',
          "alergiaReaccion" => 'Urticaria',
          "alergiaGravedad" => 'Moderado'
         ]];
        $registro['vacunas'] = [[
            "vacunaFecha" => '23-04-2009',
            "vacunaNombre" => 'Varisela',
            "vacunaTipo" => 'Inyectada',
            "vacunaDosis" => '1ml',
            "vacunaInstrucciones" => 'Paracetamol solo si da fiebre'
        ],
        [
          "vacunaFecha" => '23-04-2011',
          "vacunaNombre" => 'Sarampión',
          "vacunaTipo" => 'Inyectada',
          "vacunaDosis" => '2ml',
          "vacunaInstrucciones" => 'No tomar sol por 24 horas'
        ],
        [
          "vacunaFecha" => '23-04-2015',
          "vacunaNombre" => 'Gripe H1N1',
          "vacunaTipo" => 'Inyectada',
          "vacunaDosis" => '1ml',
          "vacunaInstrucciones" => 'Paracetamol solo si da fiebre'
        ]];

        $visitas = file_get_contents('http://10.13.3.161:3000/api/RegistroMedico/');
        $visitasData = json_decode($visitas, true);
        // dd($visitasData);
        return view('paciente_detalle', ['paciente' => $response, 'registro' => $registro, 'visitas' => $visitasData]);
    }

    public function getPacientesByAuthorizedEspecialista($especialistaId){
        // $especialistaController = new EspecialistaController;
        // $especialistaData = $especialistaController->getEspecialistaById($especialistaId);

        // $pacientes = [];
        // foreach ($especialistaData['pacientes'] as $pacienteId) {
        //     $pacientes[] = $this->getPacienteByid($pacienteId);
        // }

        $paciente = file_get_contents('http://10.13.3.161:3000/api/paciente/');
        $response = json_decode($paciente, true);
        return view('pacientes', ['pacientes' => $response]);

    }


}
