<!DOCTYPE html>
<html>
<head>
	<title>mensaje recibido</title>
</head>
<body>
<p>recibiste un mensaje de :
{{$contacto['name'] }} - {{ $contacto['email']}}</p>
<p><strong>Asunto:</strong>{{ $contacto['subject']}}</p>

<p><strong>contenido:</strong>{{ $contacto['content']}}</p>


</body>
</html>