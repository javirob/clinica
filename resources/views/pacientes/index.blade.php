@extends('layouts.app')

@section('content')
  <div class="d-flex justify-content-between align-items-center">
    <h3 class="text-uppercase">Pacientes</h3>
    <a href="{{route('pacientes.create')}}" class="btn btn-outline-primary btn-lg" data-bs-toggle="tooltip" data-bs-placement="top" title="Añadir paciente">
      Nuevo <i class="fas fa-user-plus"></i>
    </a>
  </div>
    <table class="my-4 table table-bordered table-hover shadow rounded overflow-hidden">
      <thead class="text-uppercase">
        <tr class="text-center table-primary" style="font-size:13px;">
          <th scope="col" class="font-weight-light">ID</th>
          <th scope="col" class="font-weight-light">Nombre</th>
          <th scope="col" class="font-weight-light">Apellidos</th>
          <th scope="col" class="font-weight-light">F. Nacimiento</th>
          <th scope="col" class="font-weight-light">Teléfono</th>
          <th scope="col" class="font-weight-light">Info</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($pacientes as $paciente)
            <tr scope="row" class="text-center">
                <td class="align-middle">{{$paciente->id}}</td>
                <td class="align-middle">{{$paciente->nombre}}</td>
                <td class="align-middle">{{$paciente->apellidos}}</td>    
                <td class="align-middle">{{$paciente->fnacimiento}}</td>    
                <td class="align-middle">{{$paciente->telefono}}</td>
                <td class="align-middle">
                  <a class="align-middle p-3" href="{{route('pacientes.show', $paciente)}}" data-bs-toggle="tooltip" data-bs-placement="left" title="Información del paciente">
                    <i style="font-size:18px;" class="far fa-eye"></i>
                  </a> 
                </td>
            </tr>
        @endforeach
      </tbody>
    </table>
    <div class="d-flex justify-content-center flex-fill">
      {!! $pacientes->links() !!}
    </div>
@endsection



