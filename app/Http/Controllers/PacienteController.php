<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }

  public function index()
  {
    $pacientes = Paciente::orderBy('id', 'desc')->paginate(10);

    return view('pacientes.index', compact('pacientes'));
  }

  public function show(Paciente $paciente)
  {
    return view('pacientes.show', compact('paciente'));
  }

  public function create()
  {
    return view('pacientes.create');
  }

  public function store(Request $request)
  {
    $request->validate([
      'nombre' => 'required',
      'apellidos' => 'required',
      'fnacimiento' => 'required',
      'telefono' => 'required',
    ]);

    $paciente = new Paciente();
    $paciente->nombre = $request->nombre;
    $paciente->apellidos = $request->apellidos;
    $paciente->fnacimiento = $request->fnacimiento;
    $paciente->telefono = $request->telefono;
    $paciente->email = $request->email;
    $paciente->direccion = $request->direccion;
    $paciente->enfermedades = $request->enfermedades;
    $paciente->medicamentos = $request->medicamentos;
    $paciente->seguro = $request->seguro;
    $paciente->poliza = $request->poliza;

    $paciente->save();

    return redirect()->route('pacientes.index')->with('success', 'Paciente guardado!');
  }



  public function edit(Paciente $paciente)
  {
    return view('pacientes.edit', compact('paciente'));
  }

  public function update(Request $request, Paciente $paciente)
  {
    $request->validate([
      'nombre' => 'required',
      'apellidos' => 'required',
      'fnacimiento' => 'required',
      'telefono' => 'required',
    ]);

    $paciente->nombre = $request->nombre;
    $paciente->apellidos = $request->apellidos;
    $paciente->fnacimiento = $request->fnacimiento;
    $paciente->telefono = $request->telefono;
    $paciente->email = $request->email;
    $paciente->direccion = $request->direccion;
    $paciente->enfermedades = $request->enfermedades;
    $paciente->medicamentos = $request->medicamentos;
    $paciente->seguro = $request->seguro;
    $paciente->poliza = $request->poliza;

    $paciente->save();

    return redirect()->route('pacientes.show', $paciente)->with('success', 'Actualizado!');
  }

  public function destroy(Paciente $paciente)
  {
    $paciente->delete();

    return redirect()->route('pacientes.index', $paciente)->with('error', 'Resgistro eliminado');
  }
}
