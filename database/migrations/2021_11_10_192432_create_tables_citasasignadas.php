<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablesCitasasignadas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citasasignadas_odontologia', function (Blueprint $table) {
            $table->id();
            $table->string('Servicio');
            $table->string('Nombre');
            $table->string('Fecha');
            $table->string('Hora');
            $table->string('Paciente');
            $table->string('Cedula');
            $table->timestamps();
        });

        Schema::create('citasasignadas_medicina', function (Blueprint $table) {
            $table->id();
            $table->string('Servicio');
            $table->string('Nombre');
            $table->string('Fecha');
            $table->string('Hora');
            $table->string('Paciente');
            $table->string('Cedula');
            $table->timestamps();
        });

        Schema::create('citasasignadas_laboratorio', function (Blueprint $table) {
            $table->id();
            $table->string('Servicio');
            $table->string('Nombre');
            $table->string('Fecha');
            $table->string('Hora');
            $table->string('Paciente');
            $table->string('Cedula');
            $table->timestamps();
        });

        Schema::create('citasasignadas_optometria', function (Blueprint $table) {
            $table->id();
            $table->string('Servicio');
            $table->string('Nombre');
            $table->string('Fecha');
            $table->string('Hora');
            $table->string('Paciente');
            $table->string('Cedula');
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
        Schema::dropIfExists('tables_citasasignadas');
    }
}
