@extends('plantilla')

@section('seccion')
<br>
<h1>CONTACTO</h1>

<form method="POST" action="{{route('contacto')}}">
@csrf

<input  name="name" placeholder="nombre " value="{{old('name')}}"><br>

{!! $errors->first('name','<small>:message</small><br>')!!}

<input  type="email" name="email" placeholder="email" value="{{old('email') }}"><br>

{!! $errors->first('email','<small>:message</small><br>')!!}


<input  name="subject" placeholder="asunto" value="{{old('subject')}}">
<br>

{!! $errors->first('subject','<small>:message</small><br>')!!}

<textarea  name="content" placeholder="mensaje"></textarea> <br>

{!! $errors->first('content','<small>:message</small><br>')!!}


<button>Enviar</button>

</form>




@endsection