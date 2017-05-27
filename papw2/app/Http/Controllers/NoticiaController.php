<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Noticia;
use App\Categoria;
use Session;
use Illuminate\Support\Facades\DB;


class NoticiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $usuarios = Noticia::Noticias_principal();
        $categories = Categoria::all();
        $valores = Session::get('datos');

        $noticias = DB::table('usuario_noticia')
        ->join('usuarios', 'usuarios.idUsuario', '=', 'usuario_noticia.idUsuario')
        ->select('usuario_noticia.*', 'usuarios.*')
        ->orderBy('usuario_noticia.fecha', 'ASC')
        ->orderBy('usuario_noticia.hora', 'ASC')
        ->get();

        return view('Layouts.Formularios.noticia', compact('categories', 'valores', 'usuarios','noticias'));
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
            /*
        $nueva_noticia = new Noticia;
            $nueva_noticia->titulo = $request['titulo'];
            $nueva_noticia->contenido = $request['contenido'];
            $nueva_noticia->idCategoria = '1';
            $nueva_noticia->idUsuario = $request['idUsuario'];
            $nueva_noticia->save();
            */

            $nueva = new Noticia($request->all());
            $nueva->save();

    return redirect('principal')->with('mensaje', 'Reseña Realizada Correctamente - La reseña estara disponible cuando sea aprovada por el administrador');
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

        $noticia = DB::table('noticias')
        ->join('usuarios', 'usuarios.idUsuario', '=', 'noticias.idUsuario')
        ->join('categorias', 'categorias.idCategoria', '=', 'noticias.idCategoria')
        ->select('noticias.*', 'usuarios.nombre', 'categorias.categoria')
        ->where([['noticias.idNoticia', '=', $id],['noticias.validacion', '=', '1'],])
        ->first();

        $idNoticia = $noticia->idNoticia;
        $titulo = $noticia->titulo;
        $contenido = $noticia->contenido;
        $nombre = $noticia->nombre;
        $fecha = substr($noticia->created_at, 0, -9);
        $path = $noticia->path;

        $noticias = DB::table('usuario_noticia')
        ->join('usuarios', 'usuarios.idUsuario', '=', 'usuario_noticia.idUsuario')
        ->select('usuario_noticia.*', 'usuarios.*')
        ->where('usuario_noticia.idNoticia', '=', $id)
        ->orderBy('usuario_noticia.fecha', 'ASC')
        ->orderBy('usuario_noticia.hora', 'ASC')
        ->paginate(5);

        $valores = Session::get('datos');



        return view('Layouts.comentarios_noticias', compact('titulo', 'contenido', 'fecha','path', 'nombre', 'idNoticia', 'valores', 'noticias'));
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
