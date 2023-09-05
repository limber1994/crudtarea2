@extends('layout/plantilla')
@section("titulopagina", 'crear un nuevo registro')
@section('contenido')   

<div class="card">
    <div class="card-header">
        Eliminar una persona
        </div>
        <div class="card-body">
        <p class="card-text">
            <div class="alert alert-danger" role="alert">
               Estas seguro de eliminar este registro!!!
               <table class="table table-sm table-hover table-bordered" style="background-color: aquamarine">
                <thead>
                    <th>Apeliido paterno</th>
                    <th>Apeliido materno</th>
                    <th>Nombre</th>
                    <th>Fecha de nacimiento</th>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$personas->paterno}}</td>
                        <td>{{$personas->materno}}</td>
                        <td>{{$personas->nombre}}</td>
                        <td>{{$personas->fecha_nacimiento}}</td>
                    </tr>
                </tbody>
               </table>
               <hr>
               <form action="{{route('personas.destroy',$personas->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <a href="{{route('personas.index')}}" class="btn btn-info">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z"/>
                    </svg>
                    Regresar
                </a>
                <button class="btn btn-danger">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                        <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
                      </svg>
                    Eliminar
                </button>
               </form>
            </div>
        </p>
        
        </div>
  </div>
@endsection