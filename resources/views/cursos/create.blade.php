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
            <input type="text" name="name" value="{{ old('name') }}">
            <br>
        </label>

        @error('name')
            <br>    
                <small>
                    *{{ $message }}
                </small>
            <br>
        @enderror
        <br>

        <label>
            Descripcion: 
            <br>
            <textarea type="text" name="description" rows="5" >
                {{ old('description') }}
            </textarea>
            <br>
        </label>

        @error('description')
            <br>    
                <small>
                    *{{ $message }}
                </small>
            <br>
        @enderror
        
        <label>
            Categoria:
            <br>
            <input type="text" name="categoria" value="{{ old('categoria') }}">
            <br>
        </label>
        @error('categoria')
            <br>    
                <small>
                    *{{ $message }}
                </small>
            <br>
        @enderror
        <br>
        <button type="submit">Enviar formulario</button>
    </form>
@endsection

