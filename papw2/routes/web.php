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


Route::resource('inicio', 'UsuarioController');

Route::get('/principal', function () {
        return view('principal');
});

Route::get('/perfil', function () {
        return view('perfil');
});

Route::get('/noticia', function () {
        return view('noticia');
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