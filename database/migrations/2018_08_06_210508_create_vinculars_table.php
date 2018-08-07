<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVincularsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vincular', function (Blueprint $table) {
            $table->unsignedInteger('idUser');
            $table->foreign('idUser')->references('idUser')->on('usuarios');

            $table->unsignedInteger('idCanales');
            $table->foreign('idCanales')->references('idCanales')->on('canales');

            $table->primary(['idUser', 'idCanales']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vinculars');
    }
}
