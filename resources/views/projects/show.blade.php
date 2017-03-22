@extends('projects.master')


@section('content')

    <div class="col-sm-12 blog-main">

        <h1>All Projects:</h1>
        <hr>
        <ul>
            @foreach($projects as $project)
                <li><a href="/projects/{{$project->title}}"><strong>{{ucfirst($project->title) }}</strong></a> </li>


            @endforeach
        </ul>


        <div style="    margin-left: 500px;">
            {{ $projects->links() }}
        </div>


    </div>

@endsection