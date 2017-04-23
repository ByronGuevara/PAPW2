<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('idUsuario');
            $table->string("nombre", 100);
            $table->string("email", 50)->unique();
            $table->string("contrasenia", 200);
            $table->date("fechaNacimiento")->nullable();
            $table->integer('genero')->nullable();
            $table->binary('foto')->nullable();
            $table->enum('tipo', ['usuario', 'administrador'])->default('usuario');
            $table->rememberToken();
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
        Schema::dropIfExists('usuarios');
    }
}
