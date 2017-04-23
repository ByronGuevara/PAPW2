<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    //

    protected $table = "usuarios";

    protected $fillable = ['nombre', 'email', 'contrasenia', 'fechaNacimiento', 'genero', 'tipo', 'foto'];

    protected $hidden = ['contrasenia', 'remember_token'];

    protected $guarded = ['idUsuario'];
}
