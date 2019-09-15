<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class PaginaController extends Controller
{
    
public function inicio(){
$gasto = App\Gasto::all(); 
return view('welcome',compact('gasto'));

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


}
