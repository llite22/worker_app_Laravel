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
                <a href="{{route('worker.index')}}">Назад</a>
            </div>
        </div>
        <hr>
    </div>

@endsection
