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
Index page
<div>
    <hr>
    <div>
        <a href="{{route('worker.create')}}">Создать</a>
    </div>
    <hr>
    @foreach($workers as $worker)
        <div>
            <div>{{ $worker->name }}</div>
            <div>{{ $worker->surname }}</div>
            <div>{{ $worker->email }}</div>
            <div>{{ $worker->age }}</div>
            <div>{{ $worker->description }}</div>
            <div>{{ $worker->is_married }}</div>
            <div>
                <a href="{{route('worker.show', $worker->id)}}">Просмотреть</a>
            </div>
            <div>
                <a href="{{route('worker.edit', $worker->id)}}">Редактировать</a>
            </div>
            <div>
                <form action="{{route('worker.delete', $worker->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Удалить</button>
                </form>
            </div>
        </div>
        <hr>
    @endforeach
    <div class="my_nav">
        {{ $workers->links() }}
    </div>
</div>
<style>
    .my_nav svg {
        width: 20px;
    }
</style>
</body>
</html>
