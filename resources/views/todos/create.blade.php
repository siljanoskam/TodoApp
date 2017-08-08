@extends('layouts.master')

@section('content')

    <h1>Create Todo</h1>
    <hr>

    <form action="/todos/create" method="POST">

        {{ csrf_field() }}

        <div class="form-group">
            <label for="todo">Todo:</label>
            <input type="text" class="form-control" name="todo" placeholder="todo">
        </div>

        <div class="form-group">
            <label>Done</label>
            <input class="checkbox" type="checkbox" name="isDone">
        </div>

        <div class="form-group">

            <button type="submit" class="btn btn-primary">Add Todo</button>

        </div>

        @include('layouts.errors')

    </form>

    @endsection