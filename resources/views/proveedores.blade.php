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
                <td>codigo proveedores</td>
                <td>ruc</td>
                <td>codigo documento</td>
                <td>numero</td>
                <td>celular</td>
                <td>direccion</td>
            </tr>
            @foreach($dato as $value)
            <tr>
                <td>{{$value->idproveedores}}</td>
                <td>{{$value->ruc}}</td>
                <td>{{$value->iddocu}}</td>
                <td>{{$value->numero}}</td>
                <td>{{$value->celular}}</td>
                <td>{{$value->direccion}}</td>
            </tr>
            @endforeach
    </table>
    
    
</body>
</html>