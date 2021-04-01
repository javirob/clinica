@extends('layouts.app')

@section('content')
  <div class="d-flex justify-content-between align-items-center">
    <h3 class="text-uppercase">Empleados</h3>
    <a href="empleados/create" class="btn btn-outline-primary btn-lg" data-bs-toggle="tooltip" data-bs-placement="top" title="Añadir empleado">
      Nuevo <i class="fas fa-user-plus"></i>
    </a>
  </div>
  <div class="table-responsive">
      <table class="my-4 table table-bordered table-hover shadow rounded overflow-hidden">
        <thead class="text-uppercase">
          <tr class="text-center table-success" style="font-size:13px;">
            <th scope="col" class="font-weight-light">Nombre</th>
            <th scope="col" class="font-weight-light">Apellidos</th>
            <th scope="col" class="font-weight-light">Puesto</th>
            <th scope="col" class="font-weight-light">Email</th>
            <th scope="col" class="font-weight-light">Info</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($empleados as $empleado)
              <tr scope="row" class="text-center">
                  <td class="align-middle">{{$empleado->nombre}}</td>
                  <td class="align-middle">{{$empleado->apellidos}}</td>    
                  <td class="align-middle">{{$empleado->puesto['nombre']}}</td> 
                  <td class="align-middle">{{$empleado->email}}</td>
                  <td class="align-middle">
                    <a class="align-middle p-3" href="{{route('empleados.show', $empleado)}}" data-bs-toggle="tooltip" data-bs-placement="top" title="Detalle empleado">
                      <i style="font-size:18px;" class="far fa-eye"></i>
                    </a> 
                  </td>
              </tr>
          @endforeach
        </tbody>
      </table>
  </div>

    <div class="d-flex justify-content-center flex-fill">
      {!! $empleados->links() !!}
    </div>
@endsection



