@extends('layouts.plantilla')

@section('title', 'Cursos create')

@section('content')
    <h1>En esta pagina podras crear un curso</h1>
    <br>
    <form action="{{route('cursos.store')}}" method="POST">

        @csrf
        
        <label>
            Nombre:
            <br>
            <input type="text" name="name">
            <br>
        </label>
        <label>
            Descripcion: 
            <br>
            <textarea type="text" name="description" rows="5"></textarea>
            <br>
        </label>
        <label>
            Categoria:
            <br>
            <input type="text" name="categoria">
            <br>
        </label>
        <button type="submit">Enviar formulario</button>
    </form>
@endsection

