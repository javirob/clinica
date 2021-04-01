@extends('layouts.app')

@section('content')
  <a href="{{route('pacientes.index')}}" class="btn btn-outline-dark">
    <i class="fas fa-chevron-circle-left"></i> Volver
  </a>

  <div class="mt-4 card shadow overflow-hidden">

    <div class="card-header p-3">
      <h3 class="align-middle"><i class="fas fa-user-plus"></i> Añadir paciente</h3>
    </div>

    <form action="{{route('pacientes.store')}}" method="POST">
      @csrf
      <div class="card-body row g-3">
        <div class="col-md-5 mb-4">
          <label for="nombre" class="form-label">
            <span class="text-danger">*</span> Nombre
          </label>
          <input type="text" class="form-control" name='nombre' id="nombre" aria-describedby="nombre" value="{{old('nombre')}}">
          @error('nombre')
            <small class="text-danger font-italic">* Debes introducir el nombre</small>
          @enderror
        </div>
        <div class="col-md-7 mb-4">
          <label for="apellidos" class="form-label">
            <span class="text-danger">*</span> Apellidos
          </label>
          <input type="text" class="form-control" name='apellidos' id="apellidos" aria-describedby="apellidos" value="{{old('apellidos')}}">
          @error('apellidos')
            <small class="text-danger font-italic">* Debes introducir los apellidos</small>
           @enderror
        </div>
        <div class="col-md-4 mb-4">
          <label for="fnacimiento" class="form-label">
            <span class="text-danger">*</span> Fecha de nacimiento
          </label>
          <input type="date" class="form-control" name='fnacimiento' id="fnacimiento" aria-describedby="fnacimiento"  value="{{old('fnacimiento')}}">
          @error('fnacimiento')
          <small class="text-danger font-italic">* Debes introducir la fecha de nacimiento</small>
         @enderror
        </div>
        <div class="col-md-3 mb-4">
          <label for="telefono" class="form-label">
            <span class="text-danger">*</span> Teléfono
          </label>
          <input type="text" class="form-control" name='telefono' id="telefono" aria-describedby="telefono" value="{{old('telefono')}}">
          @error('telefono')
          <small class="text-danger font-italic">* Debes introducir el telefono</small>
         @enderror
        </div>
        <div class="col-md-5 mb-4">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" name='email' id="email" aria-describedby="email" value="{{old('email')}}">
        </div>
        <div class="col-md-12 mb-4">
          <label for="direccion" class="form-label">Dirección</label>
          <textarea class="form-control" id="direccion" rows="3" name="direccion">{{old('direccion')}}</textarea>
        </div>
        <div class="col-md-6 mb-4">
          <label for="enfermedades" class="form-label">Enfermedades</label>
          <textarea class="form-control" id="enfermedades" rows="3" name="enfermedades">{{old('enfermedades')}}</textarea>
        </div>
        <div class="col-md-6 mb-4">
          <label for="medicamentos" class="form-label">Medicamentos</label>
          <textarea class="form-control" id="medicamentos" rows="3" name="medicamentos">{{old('medicamentos')}}</textarea>
        </div>
        <div class="col-md-6 mb-4">
          <label for="seguro" class="form-label">Seguro</label>
          <input type="text" class="form-control" name='seguro' id="seguro" aria-describedby="seguro" value="{{old('seguro')}}">
        </div>
        <div class="col-md-6 mb-4">
          <label for="poliza" class="form-label">Póliza</label>
          <input type="text" class="form-control" name='poliza' id="poliza" aria-describedby="poliza"  value="{{old('poliza')}}">
        </div>
        <button type="submit" class="col-md-3 mx-3 btn btn-primary">Guardar</button>
      </div>
    </form>
  </div>
@endsection