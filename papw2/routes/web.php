<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Illuminate\Support\Facades\DB;
use App\User;
use Carbon\Carbon;




Route::resource('inicio', 'UsuarioController');

/*
Route::get('/principal', function () {
        return view('principal2');
})->name('principal');
*/

Route::resource('/principal', 'NoticiaController');

Route::resource('/admin', 'AdminController');


Route::resource('/perfil', 'PerfilController');

Route::get('perfil/{id}',[
    'uses' => 'PerfilController@update',
    'as' => 'perfil.update'

    ]);

Route::get('perfil/{id}',[
    'uses' => 'PerfilController@destroy',
    'as' => 'perfil.destroy'

    ]);


Route::get('noticia/{id}',[
    'uses' => 'NoticiaController@show',
    'as' => 'noticia.show'

]);


/*
Route::get('/perfil', function () {
        return view('perfil');
});

*/

Route::get('/noticia', function () {
        return view('noticia');
});

Route::post('/register', function () {

	if (Request::ajax()) 
	{
		$unique = "true";
        $correo = str_replace('"','',Response::json(Request('correo'))->getContent());
 		$users = DB::table('usuarios')->get();

        foreach ($users as $user) {
        	if($user->email == $correo)
        	{
        	$unique = "false";
        	}
        }

		if($unique == "true")
		{
			/*
			$nuevo_usuario = new User;
	        $nuevo_usuario->name = str_replace('"','',Response::json(Request('nombre'))->getContent());
	        $nuevo_usuario->email = str_replace('"','',Response::json(Request('correo'))->getContent());
	        $nuevo_usuario->password = Hash::make(str_replace('"','',Response::json(Request('password'))->getContent()));
        	$nuevo_usuario->save();
        	*/

        	 DB::table('usuarios')->insert([
        	'nombre' => str_replace('"','',Response::json(Request('nombre'))->getContent()), 
        	'email' => str_replace('"','',Response::json(Request('correo'))->getContent()),
        	'contrasenia' => Hash::make(str_replace('"','',Response::json(Request('password'))->getContent()))
        ]);
        }
		return $unique;
	};

});

Route::post('/login', function () {

	if (Request::ajax()) 
	{
		$datos_correctos = "";
        $correo_login = str_replace('"','',Response::json(Request('usuario_login'))->getContent());
        $pass_login = str_replace('"','',Response::json(Request('contrasenia_login'))->getContent());

 		$users_total = DB::table('usuarios')->get();


        foreach ($users_total as $user_total) {
        	if($user_total->email == $correo_login)
        	{
        		if (Hash::check($pass_login, $user_total->contrasenia)) {
  // here you know data is valid

                    if($user_total->administrador == 0)
                    {

        			$datos_correctos = "false";

                    session()->forget('datos');

                    session()->push('datos', $user_total->idUsuario);
                    session()->push('datos', $user_total->nombre);
                    session()->push('datos', $user_total->email);
                    session()->push('datos', $pass_login);
                    session()->push('datos', $user_total->fechaNacimiento);
                    session()->push('datos', $user_total->genero);
                    }
                    else
                    {
                        $datos_correctos = "true";

                    session()->forget('datos');

                    session()->push('datos', $user_total->idUsuario);
                    session()->push('datos', $user_total->nombre);
                    session()->push('datos', $user_total->email);
                    session()->push('datos', $pass_login);
                    session()->push('datos', $user_total->fechaNacimiento);
                    session()->push('datos', $user_total->genero);
                    }

        			}
        	}
        }

		return $datos_correctos;	
	};

});

/*

Route::get('/2', function () {
    return view('Template');

});

Route::get('/', function () {
	$saludo = "Hola Mundo";
	$exito = true;
    return view('welcome')->with('saludo', $saludo)->withExito($exito);

});

Route::get('Bienvenido', function () {
    return view('PAPW2_landing_page');
});

*/
/* Pruebas */

/*

Route::get('prueba', function () {
    return 'Si esta entrando';
});

Route::get('user/{id}', function ($id) { 
	return 'El Usuario es =  '.$id;
});

Route::get('datos/{apeId},{edadId},{opcionaL?}', function ($apeId, $edadId, $opcionaL = 'No tiene') {
	return 'El Apellido es = '.$apeId.' y su Edad es = '.$edadId. ' y su dato opcional es = '.$opcionaL;

});

Route::get('nombre/{name?}', function ($name = null) {
	return $name;
})->where('name', '[A-Za-z]+'); // Condiciones

Route::get('numero/{num}', function ($num) {
	return $num;

})->where('num', '[0-9]+'); // Condiciones


Route::get('userr/profile', function () {	

	// Generating URLs... 	$url = route('profile');

// Generating Redirects... 	return redirect()->route('profile');


})->name('profile');

Route::get('userr/{id}/profile', function ($id) {

	// $url = route('profile', ['id' => 1]);
		return 'Entro';

})->name('profile2');


// Agrupa todo en funcion al prefix, ahora admin funcionaria como un subdominio
Route::group(['prefix' => 'admin'], function () {
Route::get('users', function ()    {
		// Matches The "/admin/users" URL
			return 'Entro';

			});
Route::get('lol', function ()    {
		// Matches The "/admin/users" URL
			return 'Entro2';

			});
});

*/



Route::post('/aceptar', function () {

    if (Request::ajax()) 
    {
        $idUsuario = str_replace('"','',Response::json(Request('idUsuario'))->getContent());
             

        DB::table('noticias')->where('idNoticia', $idUsuario)->update(['validacion' => 1]);

        
        return $idUsuario;
    };

});

Route::post('/denegar', function () {

    if (Request::ajax()) 
    {
        $idUsuario = str_replace('"','',Response::json(Request('idUsuario'))->getContent());
             

        DB::table('noticias')->where('idNoticia', $idUsuario)->update(['validacion' => 2]);

        
        return $idUsuario;
    };

});



Route::post('/eliminar', function () {

    if (Request::ajax()) 
    {
        $idUsuario = str_replace('"','',Response::json(Request('idUsuario'))->getContent());
             

        DB::table('noticias')->where('idNoticia', $idUsuario)->update(['validacion' => 2]);

        
        return $idUsuario;
    };

});

Route::post('/busqueda', function () {

    if (Request::ajax()) 
    {
        $a_buscar = str_replace('"','',Response::json(Request('texto'))->getContent());
        $de = str_replace('"','',Response::json(Request('fecha_de'))->getContent());
        $hasta = str_replace('"','',Response::json(Request('fecha_hasta'))->getContent());
        $tipo = str_replace('"','',Response::json(Request('tipo'))->getContent());
             
             if($tipo == "1")
             {

        $resultados = DB::table('noticias')
        ->join('usuarios', 'usuarios.idUsuario', '=', 'noticias.idUsuario')
        ->join('categorias', 'categorias.idCategoria', '=', 'noticias.idCategoria')
        ->select('noticias.*', 'usuarios.nombre', 'categorias.categoria')
        ->where('noticias.validacion', '=', '1')
        ->whereBetween('noticias.created_at', [$de, $hasta])
        ->where(function($query) use ($a_buscar){
        $query->where('noticias.titulo', 'LIKE', '%'.$a_buscar.'%');
        $query->orWhere('usuarios.nombre', 'LIKE', '%'.$a_buscar.'%');
        $query->orWhere('categorias.categoria', 'LIKE', '%'.$a_buscar.'%');
    })
        ->orderBy('noticias.created_at', 'DESC')
        ->get();

             }
             else
             {

         $resultados = DB::table('noticias')
        ->join('usuarios', 'usuarios.idUsuario', '=', 'noticias.idUsuario')
        ->join('categorias', 'categorias.idCategoria', '=', 'noticias.idCategoria')
        ->select('noticias.*', 'usuarios.nombre', 'categorias.categoria')        
        ->where('noticias.validacion', '=', '1')
        ->where(function($query) use ($a_buscar){
        $query->where('noticias.titulo', 'LIKE', '%'.$a_buscar.'%');
        $query->orWhere('usuarios.nombre', 'LIKE', '%'.$a_buscar.'%');
        $query->orWhere('categorias.categoria', 'LIKE', '%'.$a_buscar.'%');
    })
        ->orderBy('noticias.created_at', 'DESC')
        ->get();

            }

        $r = "";

        foreach ($resultados as $resultado) {

          $r .= "<div class='Noticias'>
                    <div class='div-foto'>
                            <a href='noticia/".$resultado->idNoticia."' title='".$resultado->titulo."' class='NoticiaFoto'> <img src='fotos/".$resultado->path."'></a>
                    </div>


                    <div class='div-descripcion'>
                        <a href='noticia/".$resultado->idNoticia."'>".$resultado->titulo."</a>
                        <p>".$resultado->contenido."</p>
                    </div>

                    <div id='Autor'>
                        <span>Author:</span>
                        <a class='lfalso'>".$resultado->nombre."</a>
                        <small>".$rest = substr($resultado->created_at, 0, -9)."</small>
                        <div id='Categoria' class='".$resultado->categoria."'>".$resultado->categoria."</div>
                    </div>

     
                </div>";
        }



        
        return $r;
    };

});



Route::post('noticia/comentar', function () {

    if (Request::ajax()) 
    {
        $comentario = str_replace('"','',Response::json(Request('comentario'))->getContent());
        $idNoticia = str_replace('"','',Response::json(Request('idNoticia'))->getContent());
        $idUsuario = str_replace('"','',Response::json(Request('idUsuario'))->getContent());

        $hoy = Carbon::now();

             
        DB::table('usuario_noticia')->insert([
            'idNoticia' => $idNoticia, 
            'idUsuario' => $idUsuario,
            'comentario' => $comentario,
            'fecha' => $hoy->toDateString(),
            'hora' => $hoy->toTimeString(),
        ]);

        
        return 'true';
    };

});