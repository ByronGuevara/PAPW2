<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Usuario;
use App\Categoria;
use Session;
use Hash;
use Carbon\Carbon;
use DateTime;




class PerfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $valores = Session::get('datos');

        $cumpleanos = new DateTime($valores[4]);
        $hoy = new DateTime();
        $annos = $hoy->diff($cumpleanos);
        $edad = $annos->y;
        $edad = $edad.' años';

        $usuarios = DB::table('noticias')
        ->join('usuarios', 'usuarios.idUsuario', '=', 'noticias.idUsuario')
        ->join('categorias', 'categorias.idCategoria', '=', 'noticias.idCategoria')
        ->select('noticias.*', 'usuarios.nombre', 'categorias.categoria')
        ->where([['noticias.idUsuario', '=', $valores[0]],['noticias.validacion', '=', '1'],])
        ->orderBy('noticias.created_at', 'DESC')
        ->paginate(5);


        $user = DB::table('usuarios')->where('idUsuario', $valores[0])->first();

        $path_fotoperfil = $user->fotoPerfil;
        $path_fotoportada = $user->fotoPortada;

        $categories = Categoria::all();


        return view('Layouts.Formularios.mi_perfil', compact('valores', 'path_fotoperfil', 'path_fotoportada', 'edad', 'usuarios', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if($request->tipo == "perfil")
        {

        $file = $request->file('fotoPerfil');
        $nombre = Carbon::now()->second.$file->getClientOriginalName();
 
       \Storage::disk('local')->put($nombre,  \File::get($file));
 
        DB::table('usuarios')->where('idUsuario', $request->idUsuario)->update(['fotoPerfil' => $nombre]);

        }
        else
        {

        $file = $request->file('fotoPortada');
        $nombre = Carbon::now()->second.$file->getClientOriginalName();
 
       \Storage::disk('local')->put($nombre,  \File::get($file));
 
        DB::table('usuarios')->where('idUsuario', $request->idUsuario)->update(['fotoPortada' => $nombre]);
        }

        return redirect('perfil')->with('Foto_perfil_modificada', 'Ha Cambiado Su Foto Con Exito');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

            DB::table('usuarios')->where('idUsuario', $request->idUsuario)->update(['nombre' => $request->nombre, 'contrasenia' => Hash::make($request->contrasenia), 'fechaNacimiento' => $request->fechaNacimiento, 'genero' => $request->genero]);

            session()->forget('datos');


                    session()->push('datos', $request['idUsuario']);
                    session()->push('datos', $request['nombre']);
                    session()->push('datos', $request['email']);
                    session()->push('datos', $request['contrasenia']);
                    session()->push('datos', $request['fechaNacimiento']);
                    session()->push('datos', $request['genero']);


            return redirect('perfil')->with('modificar_datos', 'Sus Datos Fueron Modificados Correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        //

        $file = $request->file('path');

        if($file=='')
        {
            DB::table('noticias')->where('idNoticia', $request->idNoticia)->update(['titulo' => $request->titulo, 'contenido' => $request->contenido, 'idCategoria' => $request->idCategoria]);
        }
        else
        {
            $nombre = Carbon::now()->second.$file->getClientOriginalName();
            \Storage::disk('local')->put($nombre,  \File::get($file));

            DB::table('noticias')->where('idNoticia', $request->idNoticia)->update(['titulo' => $request->titulo, 'contenido' => $request->contenido, 'idCategoria' => $request->idCategoria, 'path' => $nombre]);

        }
 
        return redirect('perfil')->with('modificar_noticia', 'Reseña Modificada Correctamente');
    }
}
