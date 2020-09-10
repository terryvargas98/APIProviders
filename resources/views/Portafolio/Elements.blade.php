<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

  <h1>  {{$Project['Nombre']}} </h1>

  <p> {{$Project['Description']}} </p>

  <p> {{$Project['Autor']}} </p>
  
@auth
<a href="{{route('EditProject',$Project)}}">Edit</a>
<form action="{{route('DeleteProject',$Project)}}" method="post">
@csrf @method('delete')

<button>Eliminar</button>

@endauth
</form>
</body>
</html>