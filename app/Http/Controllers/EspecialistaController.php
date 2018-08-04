<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EspecialistaController extends Controller
{
    public function getEspecialistas(){
        $especialistas = file_get_contents('http://10.13.3.161:3000/api/especialista');
        $response = json_decode($especialistas, true);
        return view('especialistas', ['especialistas' => $response]);
    }

    public function getEspecialistaById($id){
        $especialistas = file_get_contents('http://10.13.3.161:3000/api/especialista/' . $id);
        $response = json_decode($especialistas, true);
        return $response;
    }
}
