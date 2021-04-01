@extends('layouts.app')

@section('content')
  <a href="{{route('pacientes.index')}}" class="btn btn-outline-dark">
    <i class="fas fa-chevron-circle-left"></i> Volver
  </a>

  <div class="mt-4 card shadow overflow-hidden">

    <div class="card-header row g-2 align-items-center justify-content-between">
      <h3 class="col-md-8 pt-2">
        <i class="fas fa-user"></i> Paciente:
        <small class="font-italic">{{$paciente->nombre}} {{$paciente->apellidos}}</small>
      </h3>
     
    </div>

    <form class="card-body row g-3">
      <div class="col-md-5 mb-4">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" name='nombre' id="nombre" aria-describedby="nombre" value="{{$paciente->nombre}}" disabled>
      </div>
      <div class="col-md-7 mb-4">
        <label for="apellidos" class="form-label">Apellidos</label>
        <input type="text" class="form-control" name='apellidos' id="apellidos" aria-describedby="apellidos" value="{{$paciente->apellidos}}" disabled>
      </div>
      <div class="col-md-4 mb-4">
        <label for="fnacimiento" class="form-label">Fecha de nacimiento</label>
        <input type="date" class="form-control" name='fnacimiento' id="fnacimiento" aria-describedby="fnacimiento" value="{{$paciente->fnacimiento}}" disabled>
      </div>
      <div class="col-md-3 mb-4">
        <label for="telefono" class="form-label">Teléfono</label>
        <input type="text" class="form-control" name='telefono' id="telefono" aria-describedby="telefono" value="{{$paciente->telefono}}" disabled>
      </div>
      <div class="col-md-5 mb-4">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" name='email' id="email" aria-describedby="email" value="{{$paciente->email}}" disabled>
      </div>
      <div class="col-md-12 mb-4">
        <label for="direccion" class="form-label">Dirección</label>
        <textarea class="form-control" id="direccion" rows="3" name="direccion" disabled>{{$paciente->direccion}}</textarea>
      </div>
      <div class="col-md-6 mb-4">
        <label for="enfermedades" class="form-label">Enfermedades</label>
        <textarea class="form-control" id="enfermedades" rows="3" name="enfermedades" disabled>{{$paciente->enfermedades}}</textarea>
      </div>
      <div class="col-md-6 mb-4">
        <label for="medicamentos" class="form-label">Medicamentos</label>
        <textarea class="form-control" id="medicamentos" rows="3" name="medicamentos" disabled>{{$paciente->medicamentos}}</textarea>
      </div>
      <div class="col-md-6 mb-4">
        <label for="seguro" class="form-label">Seguro</label>
        <input type="text" class="form-control" name='seguro' id="seguro" aria-describedby="seguro" value="{{$paciente->seguro}}" disabled>
      </div>
      <div class="col-md-6 mb-4">
        <label for="poliza" class="form-label">Póliza</label>
        <input type="number" class="form-control" name='poliza' id="poliza" aria-describedby="poliza" value="{{$paciente->poliza}}" disabled>
      </div>
    </form>

    <div class="card-footer">
      <a href="{{route('pacientes.edit', $paciente)}}" class="btn btn-primary mr-3">
        <i class="fas fa-user-edit"></i> Editar
      </a>
    </div>
  </div>
@endsection