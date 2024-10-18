<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
show page
<div>
    <div>
        <div>{{ $worker->name }}</div>
        <div>{{ $worker->surname }}</div>
        <div>{{ $worker->email }}</div>
        <div>{{ $worker->age }}</div>
        <div>{{ $worker->description }}</div>
        <div>
            <a href="{{route('worker.index')}}">Назад</a>
        </div>
    </div>
    <hr>
</div>
</body>
</html>
