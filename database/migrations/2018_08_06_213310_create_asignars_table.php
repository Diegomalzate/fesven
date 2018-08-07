<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsignarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asignars', function (Blueprint $table) {

            $table->unsignedInteger('idEventos');
            $table->foreign('idEventos')->references('idEventos')->on('eventos');

            $table->unsignedInteger('idUser');
            $table->foreign('idUser')->references('idUser')->on('vincular');

            $table->unsignedInteger('idCanales');
            $table->foreign('idCanales')->references('idCanales')->on('vincular');

            $table->primary(['idUser', 'idCanales' , 'idEventos']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asignars');
    }
}
