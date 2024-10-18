@extends('layout.main')
@section('content')

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

@endsection
