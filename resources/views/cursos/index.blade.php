@extends('layouts.plantilla')

@section('title', 'Cursos')

@section('content')
    <h1>Bienvenido a la pagina principal de cursos</h1>
    <br/>
    <a href={{ route('cursos.create') }}>Crear Curso</a>
    <br/><br/>
    <ul>
        @foreach ($cursos as $curso)
            {{-- <li>{{ $curso->name }}</li> --}}
            <li>
                <a href="{{ route('cursos.show', $curso) }}"> --Curso-- {{ $curso->name}} </a>
                <br>
                <!-- {{route('cursos.show', $curso)}} -->
            </li>
        @endforeach
    </ul>

    {{ $cursos->links() }}
@endsection

