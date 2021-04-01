@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between">

  <a href="{{route('pacientes.show', $paciente)}}" class="btn btn-outline-dark">
    <i class="fas fa-chevron-circle-left"></i> Volver
  </a>
  
  <form action="{{route('pacientes.destroy', $paciente)}}" method="POST">
    @csrf
    @method('delete')
    <button type="submit" class="btn btn-danger">
      <i class="fas fa-trash"></i> Eliminar Paciente</button>
  </form>

</div>
  <div class="mt-4 card shadow overflow-hidden">
    <div class="card-header p-3">
      <h3 class="pt-2 pl-2">
        <i class="fas fa-user-edit"></i> Editar paciente: {{$paciente->nombre}}, {{$paciente->apellidos}}
      </h3>
    </div>
    <form action="{{route('pacientes.update', $paciente)}}" method="POST">
      @csrf
      @method('put')
      <div class="card-body row g-3">
        <div class="col-md-5 mb-4">
          <label for="nombre" class="form-label">
            <span class="text-danger">*</span> Nombre
          </label>
          <input type="text"  value="{{old('nombre', $paciente->nombre)}}" class="form-control" name='nombre' id="nombre" aria-describedby="nombre">
          @error('nombre')
            <small class="text-danger font-italic">* Debes introducir el nombre</small>
          @enderror
        </div>
        <div class="col-md-7 mb-4">
          <label for="apellidos" class="form-label"> 
            <span class="text-danger">*</span>  Apellidos
          </label>
          <input type="text" value="{{old('apellidos', $paciente->apellidos)}}" class="form-control" name='apellidos' id="apellidos" aria-describedby="apellidos">
          @error('apellidos')
            <small class="text-danger font-italic">* Debes introducir los apellidos</small>
          @enderror
        </div>
        <div class="col-md-4 mb-4">
          <label for="fnacimiento" class="form-label">
            <span class="text-danger">*</span> Fecha de nacimiento
          </label>
          <input type="date" value="{{old('fnacimiento', $paciente->fnacimiento)}}" class="form-control" name='fnacimiento' id="fnacimiento" aria-describedby="fnacimiento">
          @error('fnacimiento')
          <small class="text-danger font-italic">* Debes introducir la fecha de nacimiento</small>
         @enderror
        </div>
        <div class="col-md-3 mb-4">
          <label for="telefono" class="form-label">
            <span class="text-danger">*</span> Teléfono
          </label>
          <input type="text" value="{{old('telefono', $paciente->telefono)}}" class="form-control" name='telefono' id="telefono" aria-describedby="telefono" >
          @error('telefono')
           <small class="text-danger font-italic">* Debes introducir el telefono</small>
          @enderror
        </div>
        <div class="col-md-5 mb-4">
          <label for="email" class="form-label">
            Email
          </label>
          <input type="email" value="{{old('email', $paciente->email)}}" class="form-control" name='email' id="email" aria-describedby="email">
        </div>
        <div class="col-md-12 mb-4">
          <label for="direccion" class="form-label">
            Dirección
          </label>
          <textarea class="form-control" id="direccion" rows="3" name="direccion">{{old('direccion', $paciente->direccion)}}</textarea>
        </div>
        <div class="col-md-6 mb-4">
          <label for="enfermedades" class="form-label">
            Enfermedades
          </label>
          <textarea class="form-control" id="enfermedades" rows="3" name="enfermedades">{{old('enfermedades', $paciente->enfermedades)}}</textarea>
        </div>
        <div class="col-md-6 mb-4">
          <label for="medicamentos" class="form-label">
            Medicamentos
          </label>
          <textarea class="form-control" id="medicamentos" rows="3" name="medicamentos">{{old('medicamentos', $paciente->medicamentos)}}</textarea>
        </div>
        <div class="col-md-6 mb-4">
          <label for="seguro" class="form-label">
            Seguro
          </label>
          <input type="text"  value="{{old('seguro', $paciente->seguro)}}" class="form-control" name='seguro' id="seguro" aria-describedby="seguro">
        </div>
        <div class="col-md-6 mb-4">
          <label for="poliza" class="form-label">
            Póliza
          </label>
          <input type="text"  value="{{old('poliza', $paciente->poliza)}}" class="form-control" name='poliza' id="poliza" aria-describedby="poliza">
        </div>
      </div>
      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Guardar cambios</button>
      </div>
    </form>
  </div>

 
@endsection