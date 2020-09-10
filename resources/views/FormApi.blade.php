<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('ApiPost')}}" method="Post">
    @csrf
        <label>Valor en soles </label> <input type="text" name="valor" id="valor"> 
        <input type="submit" value="Calcular">  
    </form>
</body>
</html>