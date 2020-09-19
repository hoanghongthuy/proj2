<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        ul.pagination li {
            display: inline-block;
        }
    </style>
</head>
<body>
    @foreach ($data as $r)
        <div>{{$r->tensach}}/div>
    @endforeach
    {{$data->links()}}
</body>
</html>