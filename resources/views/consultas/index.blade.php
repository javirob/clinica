@extends('layouts.app')

@section('content')
  <div class="d-flex justify-content-between align-items-center">
    <h3 class="text-uppercase">Consultas</h3>
    <a href="{{route('consultas.create')}}" class="btn btn-outline-primary btn-lg" data-bs-toggle="tooltip" data-bs-placement="top" title="Nueva consulta">
      Nueva <i class="fas fa-plus-circle"></i>
    </a>
  </div>
    <table class="my-4 table table-dark table-bordered table-hover shadow rounded overflow-hidden">
      <thead class="text-uppercase">
        <tr class="text-center" style="font-size:13px;">
          <th scope="col" class="font-weight-light">Fecha</th>
          <th scope="col" class="font-weight-light">Servicio</th>
          <th scope="col" class="font-weight-light">Estado</th>
          <th scope="col" class="font-weight-light">Paciente ID</th>
          <th scope="col" class="font-weight-light">Info</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($consultas as $consulta)
            <tr scope="row" class="text-center">
                <td class="align-middle">{{$consulta->fecha}}</td>
                <td class="align-middle">{{$consulta->servicio['nombre']}}</td>              
                <td class="align-middle">{{$consulta->estado['nombre']}}</td>                          
                <td class="align-middle">{{$consulta->paciente['nombre']}} {{$consulta->paciente['apellidos']}}</td>
                <td class="align-middle">
                  <a class="align-middle p-3" href="{{route('consultas.show', $consulta)}}">
                    <i style="font-size:18px;" class="far fa-eye"></i>
                  </a> 
                </td>
            </tr>
        @endforeach
      </tbody>
    </table>
    <div class="d-flex justify-content-center flex-fill">
      {!! $consultas->links() !!}
    </div>
@endsection



