<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Persona extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persona', function (Blueprint $table) {
            $table->increments('idPersona');
            $table->string('nacionalidad',2);
            $table->string('cedula', 10);
            $table->text('nombre');
            $table->text('apellido');
            $table->date('FechaNacimiento');
            $table->string('sexo', 1);
            $table->text('correo');
            $table->text('clave');
            $table->string('estado',5);
            $table->string('tipo',14);
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
        Schema::drop('persona');
    }
}
