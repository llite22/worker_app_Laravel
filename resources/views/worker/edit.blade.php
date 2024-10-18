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
        <form action="{{route('worker.update', $worker->id)}}" method="post">
            @csrf
            @method('PATCH')
            <div>
                <label for="name">Name</label>
                <input type="text" name="name" value="{{old('name') ?? $worker->name}}" id="name">
                @error('name')
                <div>{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="surname">Surname</label>
                <input type="text" name="surname" value="{{old('surname') ?? $worker->surname}}" id="surname">
                @error('surname')
                <div>{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="email">Email</label>
                <input type="text" name="email" value="{{old('email') ?? $worker->email}}" id="email">
                @error('email')
                <div>{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="age">Age</label>
                <input type="text" name="age" value="{{old('age') ?? $worker->age}}" id="age">
                @error('age')
                <div>{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="description">Description</label>
                <textarea name="description" id="description">
                    {{old('description') ?? $worker->description}}
                </textarea>
                @error('description')
                <div>{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="is_married">Married</label>
                <input type="checkbox" name="is_married"
                    {{$worker->is_married ? 'checked' : ''}}
                >
                @error('is_married')
                <div>{{ $message }}</div>
                @enderror
            </div>
            <div>
                <button type="submit">Обновить</button>
            </div>
        </form>
    </div>
    <hr>
</div>
</body>
</html>
