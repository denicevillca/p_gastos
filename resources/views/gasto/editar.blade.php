@extends('plantilla')

@section('seccion')
<h1> Editar Gastos {{$gastos->id}}</h1>

@if(session('mensaje'))

<div class="alert alert-success">{{session('mensaje') }}</div>

@endif

<form action="{{route('gasto.actualizar',$gastos->id)}}" method="POST">

@method('PUT')
      @csrf

      @error('nombre')

      <div class="alert alert-danger alert-dismissible fade show" role="alert">coloca un nombre
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>     

      </div>
      @enderror

      @error('descripcion')

       <div class="alert alert-danger alert-dismissible fade show" role="alert">incorpora una descripcion
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>   
  </div>  


      @enderror


      @error('fecha')

     <div class="alert alert-danger alert-dismissible fade show" role="alert">ingresa la fecha 
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>   
  </div>  
      @enderror

        @error('monto')

     <div class="alert alert-danger alert-dismissible fade show" role="alert">Te falta el monto que gastaste
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>   
  </div>  
      @enderror


       <input type="text" 
       name="nombre"
        placeholder="Nombre"
         class="form-control mb-2"
          value="{{$gastos->nombre}}">
        
        <input type="text" 
        name="descripcion"
         placeholder="Descripcion" 
         class="form-control mb-2" value="{{$gastos->descripcion}}">

        <input type="date"
         name="fecha" 
         placeholder="Fecha" 
         class="form-control mb-2" 
         value="{{$gastos->fecha}}">
       
       <input type="text" 
       name="monto" 
       placeholder="Monto"
        class="form-control mb-2"
         value="{{$gastos->monto}}">
       
       <button class="btn btn-warning btn-block"
        type="submit"
         >Editar</button>

     </form>


@endsection