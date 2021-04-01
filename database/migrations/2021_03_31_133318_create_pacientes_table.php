<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacientesTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('pacientes', function (Blueprint $table) {
      $table->id();
      // nombre, apellidos, fnacimiento, telefono, email,  direccion, enfermedades, medicamentos, seguro, poliza
      $table->string('nombre');
      $table->string('apellidos');
      $table->date('fnacimiento');
      $table->string('telefono');
      $table->string('email')->nullable();
      $table->string('direccion')->nullable();
      $table->string('enfermedades')->nullable();
      $table->string('medicamentos')->nullable();
      $table->string('seguro')->nullable();
      $table->string('poliza')->nullable();
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('pacientes');
  }
}
