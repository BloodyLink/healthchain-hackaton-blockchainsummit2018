@extends('layout')

@section('content')

    <div class="row">
        <div class="col s6 offset-s3">
        <h3>Ingreso nuevo registro médico</h3>

                
        <form action="/insert_atencion" method="post">

            <input hidden="hidden" type="text" id="paciente" value="{{$paciente_id}}" />
            <div class="row">
            <div class="input-field col s12">
                <input id="fecha" type="text" class="validate">
                <label for="fecha">Fecha Atencion</label>
            </div>
            <div class="input-field col s12">
                <input id="sintomas" type="text" class="validate">
                <label for="sintomas">Sintomas</label>
            </div>
            <div class="input-field col s12">
                <input id="diagnostico" type="text" class="validate">
                <label for="diagnostico">Diagnostico</label>
            </div>
            <div class="input-field col s12">
                <input id="receta" type="text" class="validate">
                <label for="receta">Receta</label>
            </div>
            <input type="button" class="btn" value="Guardar" onclick="guardar()"/>
        </form>

        </div>
        </div>
    </div>

    <script>
        function guardar(){

            let sintomas = document.getElementById('sintomas').value;
            let diagnostico = document.getElementById('diagnostico').value;
            let receta = document.getElementById('receta').value;
            let fecha = document.getElementById('fecha').value;
            let paciente = "resource:org.example.healthchain.Paciente#" + document.getElementById('paciente').value;
            let data = "fecha: " + fecha + " Sintomas: " + sintomas + " Diagnostico: " + diagnostico + " Receta: " + receta;
            let firma = Math.floor(Math.random() * 1000);
            var settings = {
                "async": true,
                "crossDomain": true,
                "url": "http://10.13.3.161:3000/api/RegistroMedico",
                "method": "POST",
                "headers": {
                    "Content-Type": "application/json",
                    "Cache-Control": "no-cache"
                },
                "processData": false,
                "data": {
                    "$class": "org.example.healthchain.RegistroMedico",
                    "format": "visita",
                    "data": data,
                    "registroFirma": firma,
                    "paciente": paciente,
                    "especialista": "resource:org.example.healthchain.Especialista#111"
                }
            };

            $.post("http://10.13.3.161:3000/api/RegistroMedico",  settings.data, function(data, status){
                console.log(status);
            });
            // console.log(settings.data);
            //     $.ajax(settings).done(function (response) {
            //     console.log(response);
            //     });
        }
    </script>


@endsection