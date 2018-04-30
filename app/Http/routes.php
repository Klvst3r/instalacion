<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
Route::get("pagina",function(){
	echo "Hola Klvst3r en Página";
});

Route::post("nuevapagina",function(){
	echo "Hola Klvst3r en Nueva Página";
});
*/
/*
Route::get("usuario/nuevo",function(){
	echo "Hola nuevo usuario";
});
*/
/*Route::get("usuario/{nombre}",function($usuario){
	return "Hola usuario: " . $usuario;
});
*/

//sRoute::controller("producto","ProductoController");

/* 
Route::get("pagina",function(){
	return view("pagina.index");
});
*/
/*
Route::get("pagina/{numero}", function($numero){
	return view("pagina.index")->with("n", $numero);
});
*/

Route::controller("producto","ProductoController");
