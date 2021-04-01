<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consulta;
use App\Models\Servicio;
use App\Models\Sala;
use App\Models\Empleado;
use App\Models\Estado;
use App\Models\Paciente;


class ConsultaController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }

  public function index()
  {
    $consultas = Consulta::orderBy('fecha')->paginate(10);

    return view('consultas.index', compact('consultas'));
  }

  public function show(Consulta $consulta)
  {
    return view('consultas.show', compact('consulta'));
  }

  public function create()
  {
    $servicios = Servicio::all();
    $salas = Sala::all();
    $dentistas = Empleado::where('puesto_id', 3)->get();
    $estados = Estado::all();
    $pacientes = Paciente::orderBy('apellidos')->get();

    return view('consultas.create', [
      'servicios' => $servicios,
      'salas' => $salas,
      'dentistas' => $dentistas,
      'estados' => $estados,
      'pacientes' => $pacientes
    ]);
  }

  public function store(Request $request)
  {
    $request->validate([
      'fecha' => 'required'
    ]);

    $consulta = new Consulta();
    $consulta->fecha = $request->fecha;
    $consulta->servicio_id = $request->servicio_id;
    $consulta->estado_id = $request->estado_id;
    $consulta->sala_id = $request->sala_id;
    $consulta->empleado_id = $request->empleado_id;
    $consulta->paciente_id = $request->paciente_id;

    $consulta->save();

    return redirect()->route('consultas.index')->with('success', 'Consulta guardada!');
  }



  public function edit(Consulta $consulta)
  {
    $servicios = Servicio::all();
    $salas = Sala::all();
    $dentistas = Empleado::where('puesto_id', 3)->get();
    $estados = Estado::all();
    $pacientes = Paciente::orderBy('apellidos')->get();

    return view('consultas.edit', [
      'servicios' => $servicios,
      'salas' => $salas,
      'dentistas' => $dentistas,
      'estados' => $estados,
      'pacientes' => $pacientes,
      'consulta' => $consulta
    ]);
  }

  public function update(Request $request, Consulta $consulta)
  {
    $request->validate([
      'fecha' => 'required'
    ]);

    $consulta->fecha = $request->fecha;
    $consulta->servicio_id = $request->servicio_id;
    $consulta->estado_id = $request->estado_id;
    $consulta->sala_id = $request->sala_id;
    $consulta->empleado_id = $request->empleado_id;
    $consulta->paciente_id = $request->paciente_id;

    $consulta->save();

    return redirect()->route('consultas.show', $consulta)->with('success', 'Actualizado!');
  }

  public function destroy(Consulta $consulta)
  {
    $consulta->delete();

    return redirect()->route('consultas.index', $consulta)->with('danger', 'Resgistro eliminado');
  }
}
