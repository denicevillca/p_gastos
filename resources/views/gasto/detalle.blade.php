@extends('plantilla')
@section('seccion')
<h1>DETALLES DE GASTO : </h1>
<h4>Nombre: {{$gastos->nombre}}</h4>
<h4>Descripcion: {{$gastos->descripcion}}</h4>
<h4>Fecha: {{$gastos->fecha}}</h4>
<h4>Monto: {{$gastos->monto}}</h4>


@endsection