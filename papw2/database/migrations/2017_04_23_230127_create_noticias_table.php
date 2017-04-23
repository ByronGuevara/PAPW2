<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNoticiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('noticias', function (Blueprint $table) {
            $table->increments('idNoticia');
            $table->string("titulo", 100);
            $table->longText('contenido');
            $table->integer('validacion')->default(0);
            $table->timestamps();

            $table->integer('idCategoria')->unsigned();            
            $table->foreign('idCategoria')->references('idCategoria')->on('categorias')->onDelete('cascade');
            $table->integer('idUsuario')->unsigned();            
            $table->foreign('idUsuario')->references('idUsuario')->on('usuarios')->onDelete('cascade');


        });

        Schema::create('usuario_noticia', function (Blueprint $table) {
            $table->increments('idComentario');

            $table->integer('idUsuario')->unsigned();            
            $table->integer('idNoticia')->unsigned();
            $table->mediumText('comentario'); 
            $table->date('fecha'); 
            $table->time('hora'); 
            $table->timestamps();

            $table->foreign('idUsuario')->references('idUsuario')->on('usuarios');
            $table->foreign('idNoticia')->references('idNoticia')->on('noticias');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('noticias');
    }
}
