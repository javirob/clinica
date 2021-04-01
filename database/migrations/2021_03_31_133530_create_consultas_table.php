<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultasTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('consultas', function (Blueprint $table) {
      $table->id();
      $table->date('fecha');
      // FK servicio_id
      $table->unsignedBigInteger('servicio_id');
      $table->foreign('servicio_id')->references('id')->on('servicios');
      // FK estado_id
      $table->unsignedBigInteger('estado_id');
      $table->foreign('estado_id')->references('id')->on('estados');
      // FK sala_id 
      $table->unsignedBigInteger('sala_id');
      $table->foreign('sala_id')->references('id')->on('salas');
      // FK empleado_id
      $table->unsignedBigInteger('empleado_id');
      $table->foreign('empleado_id')->references('id')->on('empleados')->onDelete('cascade')->onUpdate('cascade');

      // FK paciente_id
      $table->unsignedBigInteger('paciente_id');
      $table->foreign('paciente_id')->references('id')->on('pacientes')->onDelete('cascade')->onUpdate('cascade');
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
    Schema::dropIfExists('consultas');
  }
}
