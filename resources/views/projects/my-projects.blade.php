@extends('projects.master')


@section('content')

    <div class="col-sm-12 blog-main">

        <h1>My Projects:</h1>
        <hr>
        <ul>
            @foreach($user->projects as $project)

                <li class="list-group-item">
                    <strong>
                        {{ucfirst($project->title) }}
                    </strong>

                </li>

            @endforeach
        </ul>





    </div>

@endsection