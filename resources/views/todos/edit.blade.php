@extends('layouts.master')

@section('content')

    <h1>Edit Todo</h1>
    <hr>

    <form action="/todos/edit/{{ $todo->id }}" method="POST">

        {{ csrf_field() }}

        <div class="form-group">
            <label for="todo">Todo:</label>
            <input type="text" class="form-control" name="todo" placeholder="todo" value="{{ $todo->todo }}">
        </div>

        <div class="form-group">
            <label>Done</label>
            <input class="checkbox" type="checkbox" name="isDone" @if ($todo->isDone) checked @endif >
        </div>

        <div class="form-group">

            <button type="submit" class="btn btn-primary">Update Todo</button>

        </div>

        @include('layouts.errors')

    </form>

@endsection