@extends('layout/plantilla')
@section("titulopagina", 'crear un nuevo registro')
@section('contenido')   

<div class="card">
    <div class="card-header">
        Actualizar nueva persona
        </div>
        <div class="card-body">
        <p class="card-text">
            <form action="{{route('personas.update', $personas->id)}}" method="POST">
                @csrf
                @method("PUT")
                <label for="">Apellido paterno</label>
                <input type="text" name="paterno" class="form-control" required value="{{$personas->paterno}}">
                <label for="">Apellido materno</label>
                <input type="text" name="materno" class="form-control" required value="{{$personas->materno}}">
                <label for="">Nombre</label>
                <input type="text" name="nombre" class="form-control" required value="{{$personas->nombre}}">
                <label for="">Fecha de nacimiento</label>
                <input type="date" name="fecha_nacimiento" class="form-control" required value="{{$personas->fecha_nacimiento}}">
                <br>
                <a href="{{route("personas.index")}}" class="btn btn-info">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z"/>
                    </svg>
                    Regresar
                </a>
                <button class="btn btn-warning">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-clockwise" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2v1z"/>
                        <path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466z"/>
                      </svg>
                    Actualizar
                </button>
                
            </form>
        </p>
        
        </div>
  </div>
@endsection