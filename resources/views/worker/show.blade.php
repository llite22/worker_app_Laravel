@extends('layout.main')
@section('content')

    <div>
        <div>
            <div>{{ $worker->name }}</div>
            <div>{{ $worker->surname }}</div>
            <div>{{ $worker->email }}</div>
            <div>{{ $worker->age }}</div>
            <div>{{ $worker->description }}</div>
            <div>
                <a href="{{route('workers.index')}}">Назад</a>
            </div>
        </div>
        <hr>
    </div>

@endsection
