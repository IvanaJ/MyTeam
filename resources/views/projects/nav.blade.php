<div class="blog-masthead">
    <div class="container">
        <nav class="nav blog-nav">
            <a class="nav-link active" href="/">Home</a>
            <a class="nav-link" href="/projects">Projects</a>
            @if(Auth::check())
                <a class="nav-link" href="/add-project">Add Project</a>
                <a class="nav-link" href="/my-projects">My Projects</a>
                <a class="nav-link " href="/logout" style="left: 70%;">Logout</a>
                <a class="nav-link ml-auto" href="#">Welcome, {{Auth::user()->name}}</a>
            @else
                <a class="nav-link" href="/register" style="left: 90%;">Register</a>
                <a class="nav-link ml-auto" style="left: 25%;" href="/login">Login</a>
            @endif

        </nav>
    </div>
</div>
