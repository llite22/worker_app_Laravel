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
create page
<div>
    <div>
        <form action="{{route('worker.store')}}" method="post">
            @csrf
            <div>
                <label for="name">Name</label>
                <input type="text" name="name" id="name">
            </div>
            <div>
                <label for="surname">Surname</label>
                <input type="text" name="surname" id="surname">
            </div>
            <div>
                <label for="email">Email</label>
                <input type="text" name="email" id="email">
            </div>
            <div>
                <label for="age">Age</label>
                <input type="text" name="age" id="age">
            </div>
            <div>
                <label for="description">Description</label>
                <textarea name="description" id="description"></textarea>
            </div>
            <div>
                <label for="age">Married</label>
                <input type="checkbox" name="is_married">
            </div>
            <div>
                <button type="submit">Добавить</button>
            </div>
        </form>
    </div>
    <hr>
</div>
</body>
</html>
