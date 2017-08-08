<div class="container-fluid">
    <div class="header clearfix">
        <nav>
            <ul class="nav nav-pills float-right">
                @if(Auth::user())
                <li class="nav-item">
                    <a class="nav-link" href="/todos">{{ Auth::user()->name }} <span class="sr-only">(current)</span></a>
                </li>
                    <li>
                        <a class="nav-link" href="/logout">Logout</a>
                    </li>
                @endif
            </ul>
        </nav>

        <a href="/" class="navbar-brand text-muted">TodoApp</a>

    </div>
</div>
