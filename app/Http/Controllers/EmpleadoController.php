<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;
use App\Models\Puesto;

class EmpleadoController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }

  public function index()
  {
    $empleados = Empleado::orderBy('id', 'asc')->paginate(10);

    return view('empleados.index', compact('empleados'));
  }

  public function show(Empleado $empleado)
  {
    return view('empleados.show', compact('empleado'));
  }

  public function create()
  {
    $puestos = Puesto::all();

    return view('empleados.create', compact('puestos'));
  }

  public function store(Request $request)
  {
    $request->validate([
      'nombre' => 'required',
      'apellidos' => 'required',
      'email' => 'required',
      'telefono' => 'required',
      'dni' => 'required'
    ]);

    $empleado = new Empleado();
    $empleado->nombre = $request->nombre;
    $empleado->apellidos = $request->apellidos;
    $empleado->email = $request->email;
    $empleado->puesto_id = $request->puesto_id;

    $empleado->telefono = $request->telefono;
    $empleado->dni = $request->dni;

    $empleado->save();

    return redirect()->route('empleados.index')->with('success', 'Empleado guardado!');
  }


  public function edit(Empleado $empleado)
  {
    $puestos = Puesto::all();

    return view('empleados.edit', ['empleado' => $empleado, 'puestos' => $puestos]);
  }

  public function update(Request $request, Empleado $empleado)
  {
    $request->validate([
      'nombre' => 'required',
      'apellidos' => 'required',
      'email' => 'required',
      'telefono' => 'required',
      'dni' => 'required'
    ]);

    $empleado->nombre = $request->nombre;
    $empleado->apellidos = $request->apellidos;
    $empleado->email = $request->email;
    $empleado->puesto_id = $request->puesto_id;

    $empleado->telefono = $request->telefono;
    $empleado->dni = $request->dni;

    $empleado->save();

    return redirect()->route('empleados.show', $empleado)->with('success', 'Actualizado!');
  }

  public function destroy(Empleado $empleado)
  {
    $empleado->delete();

    return redirect()->route('empleados.index', $empleado)->with('success', 'Resgistro eliminado');
  }
}
