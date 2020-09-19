<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh muc sach</title>
</head>
<body>
    <table>
        <tr>
            <td>Ma sach</td>
            <td>Ten sach</td>
            <td>Gia</td>
            <td>Hinh</td>
        </tr>
    @foreach ($data as $r)
        <tr>
            <td>{{$r->masach}}</td>
            <td>{{$r->tensach}}</td>
            <td>{{number_format($r->gia)}}</td>
            <td><img src="{{url('/book')}}/{{$r->hinh}}"></td>
        </tr>
    @endforeach
    </table>
</body>
</html>