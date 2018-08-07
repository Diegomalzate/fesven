<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsociarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asociars', function (Blueprint $table) {
            $table->unsignedInteger('idUser');
            $table->foreign('idUser')->references('idUser')->on('usuarios');

            $table->unsignedInteger('idEventos');
            $table->foreign('idEventos')->references('idEventos')->on('eventos');

            $table->primary(['idUser', 'idEventos']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asociars');
    }
}
