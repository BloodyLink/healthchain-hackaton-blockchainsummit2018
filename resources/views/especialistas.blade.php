@extends('layout')
@section('title', 'Especialistas')

@section('content')

<ul class="collection with-header">
        <li class="collection-header"><h4>Especialistas</h4></li>
        @foreach ($especialistas as $especialista)
            <li class="collection-item">
                <a href="/especialista/{{$especialista['especialistaId']}}/pacientes/">
                    {{$especialista['especialistaNombre']}} {{$especialista['especialistaApellido']}}
                </a> 
            </li>
        @endforeach
</ul>
    


@endsection
