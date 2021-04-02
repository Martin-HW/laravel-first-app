@extends('layouts.plantilla')

@section('title', 'Curso ' . $curso->name)

@section('content')
    <h1>Welcome to the course: {{ $curso->name }}</h1>
    <br>
    <a href="{{ route('cursos.index') }}">Volver a cursos</a>
    <br><br>
    <a href="{{ route('cursos.edit', $curso) }}">Editar curso</a>
    <br><br>
    <br>
    <p><strong>Categoria: </strong>{{ $curso->categoria }}</p>
    <br>
    <p><strong>Description: </strong>{{ $curso->description }}</p>

    <form action="{{route('cursos.destroy', $curso)}}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">Eliminar</button>
    </form>
@endsection
