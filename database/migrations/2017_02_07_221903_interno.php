<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Interno extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interno', function (Blueprint $table) {
            $table->increments('idInterno');
            $table->integer('idPersona')->unsigned();
            $table->text('departamento');
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
        Schema::drop('interno');
    }
}
