<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Investigacion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investigacion', function (Blueprint $table) {
            $table->increments('idInvestigacion');
            $table->integer('idPublic')->unsigned();
            $table->text('titulo');
            $table->text('resumen');
            $table->date('fechaPublicacion');
            $table->text('areaConocimiento');
            $table->string('estatus',3);
            $table->text('tipo');
            $table->foreign('idPublic')->references('idInterno')->on('interno')->onDelete('cascade');
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
        Schema::drop('investigacion');
    }
}
