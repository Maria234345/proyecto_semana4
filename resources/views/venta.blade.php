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
                <td>codigo venta</td>
                <td>serie</td>
                <td>numero corre</td>
                <td>fecha de emicion</td>
                <td>igv total</td>
                <td>sub total</td>
                <td>total</td>
            </tr>
            @foreach($dato as $value)
            <tr>
                <td>{{$value->idventa}}</td>
                <td>{{$value->serie}}</td>
                <td>{{$value->num_corre}}</td>
                <td>{{$value->fec_emi}}</td>
                <td>{{$value->igv_total}}</td>
                <td>{{$value->sub_total}}</td>
                <td>{{$value->total}}</td>
            </tr>
            @endforeach
    </table>
    
</body>
</html>