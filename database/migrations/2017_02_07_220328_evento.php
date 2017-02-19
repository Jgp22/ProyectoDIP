<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Evento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evento', function (Blueprint $table) {
            $table->increments('idEvento');
            $table->integer('idDepartamento')->unsigned();
            $table->integer('idAdjunto')->unsigned();
            $table->text('nombre');
            $table->text('descripcion');
            $table->date('fechaPublicacion');
            $table->foreign('idDepartamento')->references('idDepartamento')->on('departamento')->onDelete('cascade');
            $table->foreign('idAdjunto')->references('idAdjunto')->on('adjunto')->onDelete('cascade');
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
        Schema::drop('evento');
    }
}
