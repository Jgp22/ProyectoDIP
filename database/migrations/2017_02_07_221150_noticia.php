<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Noticia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('noticia', function (Blueprint $table) {
            $table->increments('idNoticia');
            $table->integer('idDepartamento')->unsigned();
            $table->integer('idAdjunto')->unsigned();
            $table->text('titulo');
            $table->text('contenido');
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
        Schema::drop('noticia');
    }
}
