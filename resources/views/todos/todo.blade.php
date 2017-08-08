<li class="list-group-item">
    @if($todo->isDone)
        <label><strike>{{ $todo->todo }}</strike></label>
    @else
        <label><strong>{{ $todo->todo }}</strong></label>
    @endif

    <form class="col-md-5" action="/todos/{{ $todo->id }}" method="POST">

        {{ csrf_field() }}

        <input type="hidden" name="TodoId" value="{{ $todo->id }}">

        <a class="btn btn-primary btn-sm" href="/todos/edit/{{ $todo->id }}">Edit</a>

        <button class="btn btn-danger btn-sm" type="submit">Delete</button>

    </form>

</li>

<br>