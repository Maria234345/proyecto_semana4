<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table>
        <tr>
            <td>codigo</td>
            <td>codigo compra</td>
            <td>codigo producto</td>
            <td>desripcion</td>
            <td>precio</td>
            <td>cantidad</td>
            <td>total</td>
        </tr>
        @foreach($dato as $value)
        <tr>
            <td>{{$value->idcompradeta}}</td>
            <td>{{$value->idcompra}}</td>
            <td>{{$value->idproducto}}</td>
            <td>{{$value->descripcion}}</td>
            <td>{{$value->precio}}</td>
            <td>{{$value->cant}}</td>
            <td>{{$value->total}}</td>
        </tr>
        @endforeach
</table>
    
</body>
</html>