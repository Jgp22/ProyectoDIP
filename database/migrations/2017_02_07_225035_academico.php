<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Academico extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academico', function (Blueprint $table) {
            $table->increments('idAcademico');
            $table->integer('idInterno')->unsigned();
            $table->text('nivelAcademico');
            $table->text('titulo');
            $table->text('pais');
            $table->text('intitucion');
            $table->time('fecha');
            $table->foreign('idInterno')->references('idInterno')->on('interno')->onDelete('cascade');
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
        Schema::drop('academico');
    }
}
