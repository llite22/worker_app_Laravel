@extends('layout.main')
@section('content')

    <div>
        <div>
            <form action="{{route('workers.store')}}" method="post">
                @csrf
                <div>
                    <label for="name">Name</label>
                    <input placeholder="Name" type="text" name="name" value="{{old('name')}}" id="name">
                    @error('name')
                    <div>{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label for="surname">Surname</label>
                    <input placeholder="Surname" type="text" name="surname" value="{{old('surname')}}" id="surname">
                    @error('surname')
                    <div>{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label for="email">Email</label>
                    <input placeholder="Email" type="text" name="email" value="{{old('email')}}" id="email">
                    @error('email')
                    <div>{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label for="age">Age</label>
                    <input placeholder="Age" type="text" name="age" value="{{old('age')}}" id="age">
                    @error('age')
                    <div>{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label for="description">Description</label>
                    <textarea name="description" id="description">{{old('description')}}</textarea>
                    @error('description')
                    <div>{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label for="is_married">Married</label>
                    <input
                        {{old('is_married') ? 'checked' : ''}}
                        type="checkbox" name="is_married">
                    @error('is_married')
                    <div>{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <button type="submit">Добавить</button>
                </div>
            </form>
        </div>
        <hr>
    </div>

@endsection
