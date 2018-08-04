@extends('layout')

@section('content')

  <div class="row">
    <div class="col s6 offset-s3">
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title">{{$paciente["pacienteNombre"]}} {{$paciente['pacienteApellido']}}</span>
          <p>{{$paciente['pacienteSexo']}}</p>
          <p>{{$paciente['pacienteFechaNacimiento']}}</p>
          <p>{{$paciente['pacienteEstadocivil']}}</p>
          <p>{{$paciente['pacienteAfilreligiosa']}}</p>
          <p>{{$paciente['pacienteEtnia']}}</p>
          <p>{{$paciente['pacienteIdioma']}}</p>
          <p>{{$paciente['pacienteDirección']}}</p>
          <p>{{$paciente['pacienteTelefono']}}</p>
        </div>
        <div class="card-action">
          <a href="../add_atencion/1">Guardar nuevo registro</a>
        </div>
      </div>
    </div>
  </div>

  
  <ul class="collection with-header">
        <li class="collection-header"><i class="material-icons">whatshot</i><h4>Alergias</h4></li>
        <li class="collection-item">
            <ul>
                @foreach ($registro['alergias'] as $alergia) 
                    <li>
                        Nombre: {{$alergia['alergiaNombre']}}
                    </li>
                    <li>
                       Reaccion: {{$alergia['alergiaReaccion']}}
                    </li>
                    <li>
                        Gravedad: {{$alergia['alergiaGravedad']}}
                    </li>
                    <hr>
                @endforeach
            </ul>
        </li>
        <li class="collection-header"><i class="material-icons">colorize</i><h4>Vacunas</h4></li>
        <li class="collection-item">
            <ul>
                @foreach ($registro['vacunas'] as $vacuna) 
                    <li>
                        Fecha: {{$vacuna['vacunaFecha']}}
                    </li>
                    <li>
                        Nombre: {{$vacuna['vacunaNombre']}}
                    </li>
                    <li>
                        Tipo: {{$vacuna['vacunaTipo']}}
                    </li>
                    <li>
                        Dosis: {{$vacuna['vacunaDosis']}}
                    </li>
                    <li>
                        Instrucciones: {{$vacuna['vacunaInstrucciones']}}
                    </li>
                    <hr>
                @endforeach
            </ul>
        </li>


        <li class="collection-header"><i class="material-icons">date_range</i><h4>Visitas</h4></li>
        <li class="collection-item">
            <ul>
                @foreach ($visitas as $visita) 
                    <li>
                        {{$visita['data']}}
                    </li>
                    <hr>
                @endforeach
            </ul>
        </li>
        
        
      </ul>

  <!-- <script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.collapsible');
    var instances = M.Collapsible.init(elems, options);
  });
  </script> -->

@endsection