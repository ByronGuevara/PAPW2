<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use DB;

class Noticia extends Model
{
    //

    protected $table = "noticias";

    protected $fillable = ['titulo', 'contenido', 'validacion', 'path', 'idCategoria', 'idUsuario'];

    public function  setPathAttribute($path){
    	$this->attributes['path'] = Carbon::now()->second.$path->getClientOriginalName();
    	$name = Carbon::now()->second.$path->getClientOriginalName();
    	\Storage::disk('local')->put($name, \File::get($path));
    }

    public static function Noticias(){
    	return DB::table('noticias')
    	->join('usuarios', 'usuarios.idUsuario', '=', 'noticias.idUsuario')
    	->select('noticias.*', 'usuarios.nombre')
        ->where('validacion', '=', 0)
        ->orderBy('noticias.created_at', 'DESC')
    	->paginate(5);
    }

        public static function Noticias_principal(){
        return DB::table('noticias')
        ->join('usuarios', 'usuarios.idUsuario', '=', 'noticias.idUsuario')
        ->join('categorias', 'categorias.idCategoria', '=', 'noticias.idCategoria')
        ->select('noticias.*', 'usuarios.nombre', 'categorias.categoria')
        ->where('validacion', '=', 1)
        ->orderBy('noticias.created_at', 'DESC')
        ->paginate(5);
    }

}
