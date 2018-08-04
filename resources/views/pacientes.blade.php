@extends('layout')
@section('title', 'Pacientes')

@section('content')


    <h3>Pacientes:</h3>
    <ul>
        @foreach ($pacientes as $paciente)
            <li>
                <a href="/paciente/{{$paciente['pacienteId']}}">{{$paciente['pacienteNombre']}} {{$paciente['pacienteApellido']}}</a>
            </li>
        @endforeach
    </ul>
@endsection