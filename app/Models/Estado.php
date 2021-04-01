<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
  use HasFactory;

  // Relacion 1:N inversa
  public function consultas()
  {
    return $this->hasMany('App\Models\Consulta');
  }
}
