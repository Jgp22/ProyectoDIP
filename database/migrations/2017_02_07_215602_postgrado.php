<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Postgrado extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postgrado', function (Blueprint $table) {
            $table->increments('idPostgrado');
            $table->integer('idDepartamento')->unsigned();
            $table->text('nombre');
            $table->text('gradoAcademico');
            $table->text('areaConocimiento');
            $table->text('modalidad');
            $table->foreign('idDepartamento')->references('idDepartamento')->on('departamento')->onDelete('cascade');
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
        Schema::drop('postgrado');
    }
}
