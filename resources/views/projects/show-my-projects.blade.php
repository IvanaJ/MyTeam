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
                        <button type="button" class="btn btn-success "><a href="/accept/{{$application->id}}/{{$project->id}}">Accept</a>
                        </button>
                        <button type="button" class="btn btn-danger "><a href="/reject/{{$application->id}}/{{$project->id}}">Reject</a>
                        </button>
                    </div>
                </li>

            @endforeach
        </ul>
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        <div>The number of applications is: {{$number}}</div>
        <div class="back">
            <button type="button" class="btn btn-info "><a style="color:white" href="/my-projects">Back</a></button>
        </div>

    </div>

@endsection