<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Premio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('premio', function (Blueprint $table) {
            $table->increments('idPremio');
            $table->integer('idInterno')->unsigned();
            $table->text('nombre');
            $table->date('fecha');
            $table->text('descripcion');
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
        Schema::drop('premio');
    }
}
