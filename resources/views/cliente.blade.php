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
            <td>nombre y apellidos del Usuario</td>
            <td>documento</td>
            <td>numero</td>
            <td>sexo</td>
        </tr>
        @foreach($dato as $value)
        <tr>
            <td>{{$value->idcliente}}</td>
            <td>{{$value->ape_nom}}</td>
            <td>{{$value->iddocu}}</td>
            <td>{{$value->numero}}</td>
            <td>{{$value->sexo}}</td>
        </tr>
        @endforeach
    </table>
    
</body>
</html>