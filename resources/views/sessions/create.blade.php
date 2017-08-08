@extends('layouts.master')

@section('content')

    <div class="col-md-6">

        <h1>Login</h1>
        <br>

        <form action="/login" method="POST">

            {{ csrf_field() }}

            <div class="form-group">

                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>

            </div>

            <div class="form-group">

                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" required>

            </div>

            <div class="form-group">

                <button type="submit" class="btn btn-primary">Login</button>

            </div>

            @include('layouts.errors')

        </form>

    </div>
    <br>


@endsection