<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsignadageneralTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asignadageneral', function (Blueprint $table) {
            $table->id();
            $table->string('Servicio');
            $table->string('Nombre');
            $table->string('Fecha');
            $table->string('Hora');
            $table->timestamps();
        });

        Schema::create('asignadaodontologia', function (Blueprint $table) {
            $table->id();
            $table->string('Servicio');
            $table->string('Nombre');
            $table->string('Fecha');
            $table->string('Hora');
            $table->timestamps();
        });

        Schema::create('asignadalaboratorio', function (Blueprint $table) {
            $table->id();
            $table->string('Servicio');
            $table->string('Nombre');
            $table->string('Fecha');
            $table->string('Hora');
            $table->timestamps();
        });

        Schema::create('asignadaoptometria', function (Blueprint $table) {
            $table->id();
            $table->string('Servicio');
            $table->string('Nombre');
            $table->string('Fecha');
            $table->string('Hora');
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
        Schema::dropIfExists('asignadageneral');
        Schema::dropIfExists('asignadaodontologia');
        Schema::dropIfExists('asignadalaboratorio');
        Schema::dropIfExists('asignadaoptometria');
    }
}
