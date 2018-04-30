<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Producto; //importa
use App\Http\Requests;

class ProductoController extends Controller
{
    public function getIndex(){
    	$productos = Producto::all();
    	return $productos;
    	return view("producto.listado");
    }

    public function getCrear(){
    	return view("producto.crear");
    }

    public function postCrearnuevo(Request $request){
    	//return $request->all();
    	
    	$producto = new Producto();
    	$producto->nombre = $request->input("nombre");
    	$producto->detalle = $request->input("detalle");
    	$producto->precio = $request->input("precio");
    	$producto->cantidad = $request->input("cantidad");

    	if($producto->save()){
    		return "ok";
    	}
    	 

    }	
    	
}
