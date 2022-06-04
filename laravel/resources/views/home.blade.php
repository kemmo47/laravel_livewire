@extends('layouts')

@section('content')
    <h1>My content</h1>
    @if (!blank($todos))
        <ul>
            @foreach ($todos as $todo)
                <li>{{$todo->todo_info}}</li>
            @endforeach
        </ul>
    @else
        <h2>Not thing Todos</h2>
    @endif
@endsection
