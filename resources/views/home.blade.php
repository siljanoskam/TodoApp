@extends('layouts.master')

@section('content')

    @if(!Auth::user())

        <div class="jumbotron">
            <h1 class="display-3">Welcome!</h1>
            <p class="lead">This is a simple Todo application where you can create your Todos, view, edit and delete each of them.</p>
        </div>

    <div class="text-center">
        <a class="btn btn-success btn-block" href="/login">Login</a>
        <br><br>
        <p>You don't have an account?</p>
        <a class="btn btn btn-primary btn-md" href="/register">Register</a>
    </div>

    @else

        <div class="jumbotron">
            <h1 class="display-3">Hello,</h1>
            <h1>{{ Auth::user()->name }}!</h1> <br>
            <p class="lead">This is a simple Todo application where you can create your Todos, view, edit and delete each of them.</p>
        </div>

        <div class="text-center">

            <a class="btn btn-primary btn-lg" href="/todos">View Todos</a>
            <a class="btn btn-primary btn-lg" href="/todos/create">Create Todo</a>

        </div>

    @endif

    <br><br>
@endsection