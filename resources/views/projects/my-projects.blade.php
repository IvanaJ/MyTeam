@extends('projects.master')


@section('content')

    <div class="col-sm-12 blog-main">

        <h1>My Projects:</h1>
        <hr>
        <ul>
            @foreach($user->projects as $project)


                <li><strong>{{ucfirst($project->title) }}</strong> </li>

                <button type="button" class="btn btn-info "><a style="color:white" href="/my-projects/{{$project->title}}">View details</a></button>



            @endforeach
        </ul>





    </div>

@endsection