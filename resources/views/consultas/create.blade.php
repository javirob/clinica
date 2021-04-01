@extends('layouts.app')

@section('content')
  <a href="{{route('consultas.index')}}" class="btn btn-outline-dark">
    <i class="fas fa-chevron-circle-left"></i> Volver
  </a>

  <div class="mt-4 card shadow overflow-hidden">
    <div class="card-header p-3">
      <h3>
        <i class="fas fa-plus-circle"></i> Nueva consulta
      </h3>
    </div>

    <form action="{{route('consultas.store')}}" method="POST">
      @csrf
      <div class="card-body row g-3">
        <div class="col-md-5 mb-4">
          <label for="nombre" class="form-label">
            <span class="text-danger">*</span> Fecha
          </label>
          <input type="date" class="form-control" name='fecha' id="fecha" aria-describedby="fecha" value="{{old('fecha')}}">
          @error('fecha')
              <small class="text-danger font-italic">* Introduce la fecha</small>
          @enderror
        </div>

        <div class="col-md-6 mb-4">
          <label for="servicio_id" class="form-label">
            <span class="text-danger">*</span> Servicio</label>
            <select name="servicio_id" id="servicio_id" class="form-control">
              @foreach ($servicios as $servicio)
                <option value="{{$servicio->id}}">{{$servicio->nombre}}</option>
              @endforeach
            </select>
        </div>

        <div class="col-md-6 mb-4">
          <label for="estado_id" class="form-label">
            <span class="text-danger">*</span> Estado</label>
            <select name="estado_id" id="estado_id" class="form-control">
              @foreach ($estados as $estado)
                <option value="{{$estado->id}}">{{$estado->nombre}}</option>
              @endforeach
            </select>
        </div>

        <div class="col-md-6 mb-4">
          <label for="sala_id" class="form-label">
            <span class="text-danger">*</span> Sala</label>
            <select name="sala_id" id="sala_id" class="form-control">
              @foreach ($salas as $sala)
               <option value="{{$sala->id}}">{{$sala->nombre}}</option>
              @endforeach
            </select>
        </div>

        <div class="col-md-6 mb-4">
          <label for="empleado_id" class="form-label">
            <span class="text-danger">*</span> Dentista</label>
            <select name="empleado_id" id="empleado_id" class="form-control">
              @foreach ($dentistas as $dentista)
                <option value="{{$dentista->id}}">{{$dentista->nombre}}, {{$dentista->apellidos}}</option>
              @endforeach
            </select>
        </div>

        <div class="col-md-6 mb-4">
          <label for="paciente_id" class="form-label">
            <span class="text-danger">*</span> Paciente ID</label>
            <select name="paciente_id" id="paciente_id" class="form-control">
              @foreach ($pacientes as $paciente)
                <option value="{{$paciente->id}}">{{$paciente->apellidos}}, {{$paciente->nombre}}</option>
              @endforeach
            </select>        
            @error('paciente_id')
                <small class="text-danger font-italic">* Debes el paciente</small>
            @enderror       
        </div>

        <button type="submit" class="col-md-3 mx-3 btn btn-primary">Guardar</button>
      </div>
    </form>
  </div>
@endsection