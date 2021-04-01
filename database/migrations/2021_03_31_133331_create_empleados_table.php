<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadosTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('empleados', function (Blueprint $table) {
      $table->id();
      $table->string('nombre');
      $table->string('apellidos');
      $table->string('email');


      // fk puesto

      $table->unsignedBigInteger('puesto_id');
      $table->foreign('puesto_id')->references('id')->on('puestos');

      $table->string('telefono');
      $table->string('dni');
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
    Schema::dropIfExists('empleados');
  }
}
