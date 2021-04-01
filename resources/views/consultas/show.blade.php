@extends('layouts.app')

@section('content')
  <a href="{{route('consultas.index')}}" class="btn btn-outline-dark">
    <i class="fas fa-chevron-circle-left"></i> Volver
  </a>

  <div class="mt-4 card shadow overflow-hidden">

    <div class="card-header p-3">
      <h3> <i class="fas fa-info-circle"></i>
       Detalle de consulta
      </h3>
    </div>

    <form>
      <div class="card-body row g-3">

        <div class="col-md-2 mb-4">
          <label for="consulta_id" class="form-label">ID</label>
          <input type="text" class="form-control" name='consulta_id' id="consulta_id" aria-describedby="consulta_id" value="{{$consulta->id}}" disabled>
        </div>

        <div class="col-md-3 mb-4">
          <label for="nombre" class="form-label">Fecha</label>
          <input type="date" class="form-control" name='fecha' id="fecha" aria-describedby="fecha" value="{{$consulta->fecha}}" disabled>
        </div>

        <div class="col-md-3 mb-4">
          <label for="servicio_id" class="form-label">Servicio</label>
          <input type="text" class="form-control" id="servicio_id" value="{{$consulta->servicio['nombre']}}" disabled>
        </div>

        <div class="col-md-4 mb-4">
          <label for="estado_id" class="form-label">Estado</label>
          <input type="text" class="form-control" id="estado_id" value="{{$consulta->estado['nombre']}}" disabled>
        </div>

        <div class="col-md-2 mb-4">
          <label for="sala_id" class="form-label">Sala</label>
          <input type="text" class="form-control" id="sala_id" value="{{$consulta->sala['nombre']}}" disabled>
        </div>

        <div class="col-md-5 mb-4">
          <label for="empleado" class="form-label">Dentista</label>
          <input type="text" class="form-control" id="empelado" value="{{$consulta->empleado_id}} - {{$consulta->empleado['nombre']}} {{$consulta->empleado['apellidos']}}" disabled>
        </div>

        <div class="col-md-5 mb-4">
          <label for="paciente" class="form-label">Paciente</label>
          <input type="text"  class="form-control"id="paciente" value="{{$consulta->paciente_id}} - {{$consulta->paciente['nombre']}} {{$consulta->paciente['apellidos']}}" disabled>          
        </div>
     </div>

     <div class="card-footer">
       <a href="{{route('consultas.edit', $consulta)}}" class="btn btn-primary">Editar</a>
     </div>

    </form>
  </div>
@endsection