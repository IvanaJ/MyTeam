<div class="blog-masthead">
    <div class="container">
        <nav class="nav blog-nav">
            <a class="nav-link active" href="/">Home</a>
            <a class="nav-link" href="/projects">Projects</a>
            @if(Auth::check())
            <a class="nav-link" href="/add-project">Add Project</a>
            @endif
            <a class="nav-link" href="/register">Register</a>
            <a class="nav-link ml-auto" style="left: 25%;" href="/login">Login</a>
            <a class="nav-link ml-auto" href="/logout">Logout</a>
            @if(Auth::check())
                <a class="nav-link ml-auto" href="#">Welcome, {{Auth::user()->name}}</a>
            @endif
        </nav>
    </div>
</div>
