<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\ConsultaController;


Auth::routes();


// PACIENTES

Route::get('/', [PacienteController::class, 'index'])->name('pacientes.index');

Route::get('pacientes', [PacienteController::class, 'index'])->name('pacientes.index');

Route::get('pacientes/create', [PacienteController::class, 'create'])->name('pacientes.create');

Route::post('pacientes/', [PacienteController::class, 'store'])->name('pacientes.store');

Route::get('pacientes/{paciente}', [PacienteController::class, 'show'])->name('pacientes.show');

Route::get('pacientes/{paciente}/edit', [PacienteController::class, 'edit'])->name('pacientes.edit');

Route::put('pacientes/{paciente}', [PacienteController::class, 'update'])->name('pacientes.update');

Route::delete('pacientes/{paciente}', [PacienteController::class, 'destroy'])->name('pacientes.destroy');

// EMPLEADOS

Route::get('empleados', [EmpleadoController::class, 'index'])->name('empleados.index');

Route::get('empleados/create', [EmpleadoController::class, 'create'])->name('empleados.create');

Route::post('empleados/', [EmpleadoController::class, 'store'])->name('empleados.store');

Route::get('empleados/{empleado}', [EmpleadoController::class, 'show'])->name('empleados.show');


Route::get('empleados/{empleado}/edit', [EmpleadoController::class, 'edit'])->name('empleados.edit');

Route::put('empleados/{empleado}', [EmpleadoController::class, 'update'])->name('empleados.update');

Route::delete('empleados/{empleado}/', [EmpleadoController::class, 'destroy'])->name('empleados.destroy');

// CONSULTAS

Route::get('consultas', [ConsultaController::class, 'index'])->name('consultas.index');

Route::get('consultas/create', [ConsultaController::class, 'create'])->name('consultas.create');

Route::post('consultas/', [ConsultaController::class, 'store'])->name('consultas.store');

Route::get('consultas/{consulta}', [ConsultaController::class, 'show'])->name('consultas.show');


Route::get('consultas/{consulta}/edit', [ConsultaController::class, 'edit'])->name('consultas.edit');

Route::put('consultas/{consulta}', [ConsultaController::class, 'update'])->name('consultas.update');

Route::delete('consultas/{consulta}/', [ConsultaController::class, 'destroy'])->name('consultas.destroy');
