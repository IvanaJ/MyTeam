@extends('projects.master')


@section('content')

    <div class="col-sm-12 blog-main">


        <h2>Title: {{ucwords($project->title)}}</h2>

        <p><strong>Description:</strong> {{$project->description}}</p>
        <p>This projects was made : {{$project->created_at->diffForHumans()}}</p>

        <h3>Applications from:</h3>

        <ul class="list-group">
        @foreach($project->applications as $application)

            <li class="list-group-item">
                {{$application->name }}
                <div>
                    <button type="button" class="btn btn-success ">Accept</button>
                    <button type="button" class="btn btn-danger ">Reject</button>
                </div>
            </li>


            @endforeach
</ul>

        <div class="back">
            <button type="button" class="btn btn-info "><a style="color:white" href="/my-projects">Back</a></button>
        </div>


    </div>

@endsection