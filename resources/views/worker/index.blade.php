@extends('layout.main')
@section('content')

    <div>
        <hr>

        @can('create', \App\Models\Worker::class)
            <div>
                <a href="{{route('workers.create')}}">Создать</a>
            </div>
        @endcan
        <hr>
        <div>
            <form action="{{route('workers.index')}}">
                <input type="text" name="name" placeholder="name" value="{{request()->get('name')}}">
                <input type="text" name="surname" placeholder="surname" value="{{request()->get('surname')}}"/>
                <input type="text" name="email" placeholder="email" value="{{request()->get('email')}}">
                <input type="number" name="from" placeholder="from" value="{{request()->get('from')}}">
                <input type="number" name="to" placeholder="to" value="{{request()->get('to')}}">
                <input type="text" name="description" placeholder="description"
                       value="{{request()->get('description')}}">
                <input id="is_married" type="checkbox" name="is_married" placeholder="is_married"
                    {{request()->get('is_married')== 'on' ? 'checked' : ''}}
                >
                <label for="is_married">Is Married</label>
                <button type="submit">Поиск</button>
                <a href="{{route('workers.index')}}">Сбросить</a>
            </form>
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
                    <a href="{{route('workers.show', $worker->id)}}">Просмотреть</a>
                </div>
                @can('update', $worker)
                    <div>
                        <a href="{{route('workers.edit', $worker->id)}}">Редактировать</a>
                    </div>
                @endcan
                @can('delete', $worker)
                    <div>
                        <form action="{{route('workers.destroy', $worker->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Удалить</button>
                        </form>
                    </div>
                @endcan
            </div>
            <hr>
        @endforeach
        <div class="my_nav">
            {{ $workers->withQueryString()->links() }}
        </div>
    </div>
@endsection
