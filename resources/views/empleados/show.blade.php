@extends('layouts.app')

@section('content')
  <a href="{{route('empleados.index')}}" class="btn btn-outline-dark">
    <i class="fas fa-chevron-circle-left"></i> Volver
  </a>

  <div class="mt-4 card shadow overflow-hidden">

    <div class="card-header row g-2 align-items-center justify-content-between">
      <h3 class="col-md-8 pt-2">
        <i class="fas fa-user"></i> Empleado:
        <small class="font-italic">{{$empleado->apellidos}}, {{$empleado->nombre}}</small>
      </h3>
     
    </div>

    <form class="card-body row g-3">
      <div class="col-md-5 mb-4">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" name='nombre' id="nombre" aria-describedby="nombre" value="{{$empleado->nombre}}" disabled>
      </div>
      <div class="col-md-7 mb-4">
        <label for="apellidos" class="form-label">Apellidos</label>
        <input type="text" class="form-control" name='apellidos' id="apellidos" aria-describedby="apellidos" value="{{$empleado->apellidos}}" disabled>
      </div>

      <div class="col-md-6 mb-4">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" name='email' id="email" aria-describedby="email" value="{{$empleado->email}}" disabled>
      </div>

      <div class="col-md-6 mb-4">
        <label for="puesto_id" class="form-label">Puesto</label>
         <input type="puesto_id" class="form-control" name='puesto_id' id="puesto_id" aria-describedby="puesto_id" value="{{$empleado->puesto['nombre']}}" disabled>   
      </div>

     
      <div class="col-md-5 mb-4">
        <label for="telefono" class="form-label">Teléfono</label>
        <input type="text" class="form-control" name='telefono' id="telefono" aria-describedby="telefono" value="{{$empleado->telefono}}" disabled>
      </div>
     
      <div class="col-md-5 mb-4">
        <label for="dni" class="form-label">DNI</label>
        <input class="form-control" id="dni" rows="3" name="dni"  value="{{$empleado->dni}}" disabled>
      </div>

    </form>

    <div class="card-footer">
      <a href="{{route('empleados.edit', $empleado)}}" class="btn btn-primary mr-3">
        <i class="fas fa-user-edit"></i> Editar
      </a>
    </div>
  </div>
@endsection