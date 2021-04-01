@extends('layouts.app')

@section('content')
  <a href="{{route('empleados.index')}}" class="btn btn-outline-dark">
    <i class="fas fa-chevron-circle-left"></i> Volver
  </a>

  <div class="mt-4 card shadow overflow-hidden">
    <div class="card-header p-3">
      <h3>Nuevo empleado</h3>
    </div>

    <form action="{{route('empleados.store')}}" method="POST"  >
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
            <span class="text-danger">*</span> Apellidos</label>
          <input type="text" class="form-control" name='apellidos' id="apellidos" aria-describedby="apellidos" value="{{old('apellidos')}}">
          @error('apellidos')
            <small class="text-danger font-italic">* Debes introducir los apellidos</small>
          @enderror
        </div>

        <div class="col-md-6 mb-4">
          <label for="email" class="form-label">
            <span class="text-danger">*</span> Email</label>
          <input type="email" class="form-control" name='email' id="email" aria-describedby="email" value="{{old('email')}}">
          @error('email')
            <small class="text-danger font-italic">* Debes introducir el email</small>
          @enderror
        </div>

        <div class="col-md-6 mb-4">
          <label for="puesto_id" class="form-label">
            <span class="text-danger">*</span> Puesto</label>
            <select name="puesto_id" id="puesto_id" class="form-control">
              @foreach ($puestos as $puesto)
                <option value="{{$puesto->id}}">{{$puesto->nombre}}</option>
              @endforeach
            </select>
        </div>

        <div class="col-md-5 mb-4">
          <label for="telefono" class="form-label">
            <span class="text-danger">*</span> Teléfono</label>
          <input type="text" class="form-control" name='telefono' id="telefono" aria-describedby="telefono" value="{{old('telefono')}}">
          
          @error('telefono')
            <small class="text-danger font-italic">* Debes introducir el telefono</small>
          @enderror
        </div>
      
        <div class="col-md-5 mb-4">
          <label for="dni" class="form-label">
            <span class="text-danger">*</span> DNI
          </label>
          <input class="form-control" id="dni" rows="3" name="dni" value="{{old('telefono')}}">

          @error('dni')
            <small class="text-danger font-italic">* Debes introducir el dni</small>
          @enderror
        </div>

      <button type="submit" class="col-md-3 mx-3 btn btn-primary">Guardar</button>
     </div>
    </form>

 
  </div>
@endsection