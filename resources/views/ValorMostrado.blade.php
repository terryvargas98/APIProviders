<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <li> Monto a Pagar en Soles {{$Resultado->valor["result"]["amount"]}} </li>

 Compra de dolar: {{$Resultado->referencia["cotizacion"][0]["Compra"]}}</li> <br>
 Venta de dolar :{{$Resultado->referencia["cotizacion"][0]["Venta"]}} </li>
</body>
</html>