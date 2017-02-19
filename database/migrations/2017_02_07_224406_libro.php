<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Libro extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libro', function (Blueprint $table) {
            $table->increments('idLibro');
            $table->integer('idInterno')->unsigned();
            $table->text('titulo');
            $table->date('fechaPublicacion');
            $table->text('tema');
            $table->text('pais');
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
        Schema::drop('libro');
    }
}
