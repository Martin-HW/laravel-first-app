@extends('layouts.plantilla')

@section('title', 'Cursos edit')

@section('content')
    <h1>En esta pagina podras Editar un curso</h1>
    <br>
    <form action="{{route('cursos.update', $curso)}}" method="POST">

        @csrf
        
        @method('put')

        <label>
            Nombre:
            <br>
            <input type="text" name="name" value="{{ $curso->name }}">
            <br>
        </label>
        <label>
            Descripcion: 
            <br>
            <textarea type="text" name="description" rows="5">{{ $curso->description }}</textarea>
            <br>
        </label>
        <label>
            Categoria:
            <br>
            <input type="text" name="categoria" value="{{ $curso->categoria }}">
            <br>
        </label>
        <button type="submit">Enviar formulario</button>
    </form>
@endsection

