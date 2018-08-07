<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_roles', function (Blueprint $table) {

            $table->unsignedInteger('idRoles');
            $table->foreign('idRoles')->references('idRoles')->on('roles');

            $table->unsignedInteger('idUser');
            $table->foreign('idUser')->references('idUser')->on('usuarios');

            $table->primary(['idRoles', 'idUser']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_roles');
    }
}
