@extends('layouts.master')

@section('content')

    <div class="container">

        <h1>Your Todos</h1>
        <hr>
        <br>

        <ul class="list-group">

            @if(count($todos))
                @foreach($todos as $todo)
                    @include('todos.todo')
                @endforeach
            @else
                <p>You haven't added any todos yet.</p>
                <br>
            @endif

        </ul>

        <a class="btn btn-primary" href="/todos/create">Create Todo</a>
    </div>

    <br>


@endsection