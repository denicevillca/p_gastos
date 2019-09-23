<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class PaginaController extends Controller
{
    
public function inicio(){
$gasto = App\Gasto::paginate(2); 
return view('welcome',compact('gasto'));

}

public function inicio1(){

return view('welcome');

}

public function actualizar(Request $request,$id){


	 	$request-> validate([
 		'nombre' =>'required',
 		'descripcion' =>'required',
 		'fecha' =>'required',
 		'monto' =>'required'
 	]);

 $actualizar = App\Gasto::findOrfail($id);
	$actualizar->nombre=$request->nombre;
	$actualizar->descripcion=$request->descripcion;
	$actualizar->fecha=$request->fecha;
	$actualizar->monto=$request->monto;

	$actualizar->save();
	return back()->with('mensaje','Gasto cambiado');
}

public function eliminar($id)
{
$eliminar=App\Gasto::findOrfail($id);
	$eliminar->delete();
return back()->with('mensaje','Gasto eliminado');

}


public function detalle($id){
	$gastos = App\Gasto::findOrfail($id);
	return view('gasto.detalle',compact('gastos'));
}

public function crear(Request $request){

	//return $request->all();
 	$request-> validate([
 		'nombre' =>'required',
 		'descripcion' =>'required',
 		'fecha' =>'required',
 		'monto' =>'required'
 	]);

 	$gastonuevo = new App\Gasto;
 	$gastonuevo ->nombre = $request->nombre;
 	$gastonuevo ->descripcion = $request->descripcion;
		$gastonuevo ->fecha = $request->fecha;
 	$gastonuevo ->monto = $request->monto;

 	$gastonuevo ->save();

 	return back()->with('mensaje','gasto registrado');

}

public function editar($id){
	$gastos = App\Gasto::findOrfail($id); 
  
 return view('gasto.editar',compact('gastos'));
}




}
