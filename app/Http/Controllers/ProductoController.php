<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Producto; //importa
use App\Http\Requests;

class ProductoController extends Controller
{
    public function getIndex(){
    	$productos = Producto::all();
    	//return $productos;
    	return view("producto.listado")->with(array(
    			"productos"=>$productos
    		));
    }

    public function getCrear(){
    	return view("producto.crear");
    }

    public function postCrearnuevo(Request $request){
    	//return $request->all();
    	
    	if($request->has("id")){
    		$producto = Producto::find($request->input("id"));
    	}else{
    		$producto = new Producto();	 
    	}
    	
    	
    	$producto->nombre = $request->input("nombre");
    	$producto->detalle = $request->input("detalle");
    	$producto->precio = $request->input("precio");
    	$producto->cantidad = $request->input("cantidad");

    	if($producto->save()){
    		//return "ok";
    		return redirect()->to("producto");
    	}
    	 

    }	

    public function getActualizar($id){
    	$producto = Producto::find($id);
    	if($producto){
    		return view("producto.crear")->with("producto",$producto);
    	}

    	return redirect()->back();
    }

    public function getEliminar($id){
    	$producto = Producto::find($id);
    	if($producto){
    		$producto->delete();
    	}

    	return redirect()->back();
    }
    	
}
