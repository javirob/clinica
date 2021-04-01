<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
  use HasFactory;

  // Relacion 1:N
  public function servicio()
  {
    return $this->belongsTo('App\Models\Servicio');
  }

  public function estado()
  {
    return $this->belongsTo('App\Models\Estado');
  }

  public function sala()
  {
    return $this->belongsTo('App\Models\Sala');
  }

  public function empleado()
  {
    return $this->belongsTo('App\Models\Empleado');
  }

  public function paciente()
  {
    return $this->belongsTo('App\Models\Paciente');
  }
}
