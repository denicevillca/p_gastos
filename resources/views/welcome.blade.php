     @extends('plantilla')
     @section('seccion')

     <h1 class="display-4">Gastos</h1>
     
     @if(session('mensaje'))

     <div class="alert alert-success">{{session('mensaje')}}</div>

      @endif(seccion)
     
     <form action="{{route('gasto.crear')}}" method="POST">

      @csrf

      @error('nombre')

      <div class="alert alert-danger alert-dismissible fade show" role="alert">EL Nombre es obligatorio
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>     

      </div>
      @enderror

      @error('descripcion')

      <div class="alert alert-danger">La descripcion es obligatorio</div>
      @enderror


      @error('fecha')

      <div class="alert alert-danger">Te falta la fecha</div>
      @enderror

        @error('monto')

      <div class="alert alert-danger">Te falta el monto</div>
      @enderror


       <input type="text" name="nombre" placeholder="Nombre" class="form-control mb-2" value="{{old('nombre')}}">
        
        <input type="text" name="descripcion" placeholder="Descripcion" class="form-control mb-2" value="{{old('descripcion')}}">

        <input type="date" name="fecha" placeholder="Fecha" class="form-control mb-2" value="{{old('fecha')}}">
       
       <input type="text" name="monto" placeholder="Monto" class="form-control mb-2" value="{{old('monto')}}">
       
       <button class="btn btn-primary btn-block" type="submit" >Agregar</button>

     </form>



     <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Fecha</th>
      <th scope="col">monto</th>
      
    </tr>
  </thead>
  <tbody>
    @foreach($gasto as $item)
    <tr>
      <th scope="row">{{ $item->id }}</th>
      <td>
        <a href="{{route('gasto.detalle', $item) }}"> {{$item->nombre}}</a>
     </td>
     
      <td>{{$item->descripcion}}</td>
      <td>{{$item->fecha}}</td>
      <td>{{$item->monto}}</td>
   
    </tr>
    
    @endforeach()
     </tbody>

</table>
@endsection