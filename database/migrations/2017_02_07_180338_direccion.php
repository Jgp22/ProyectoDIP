<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Direccion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('direccion', function (Blueprint $table) {
            $table->increments('idDireccion');
            $table->integer('idPersona')->unsigned();
            $table->text('estado');
            $table->text('municipio');
            $table->text('parroquia');
            $table->foreign('idPersona')->references('idPersona')->on('persona')->onDelete('cascade');
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
        Schema::drop('direccion');
    }
}
