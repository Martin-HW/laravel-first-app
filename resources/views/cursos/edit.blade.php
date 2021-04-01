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
            <input type="text" name="name" value="{{ old('name', $curso->name) }}">
            <br>
        </label>

        @error('name')
            <br>    
                <small>
                    *{{ $message }}
                </small>
            <br>
        @enderror

        <label>
            Descripcion: 
            <br>
            <textarea type="text" name="description" rows="5">
                {{ old('description', $curso->description) }}
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
            <input type="text" name="categoria" value="{{ old('categoria', $curso->categoria) }}">
            <br>
        </label>

        @error('categoria')
            <br>    
                <small>
                    *{{ $message }}
                </small>
            <br>
        @enderror 

        <button type="submit">Enviar formulario</button>
    </form>
@endsection

