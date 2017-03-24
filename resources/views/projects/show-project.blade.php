@extends('projects.master')


@section('content')

    <div class="col-sm-12 blog-main">


        <h2>Title: {{ucwords($project->title)}}</h2>

        <p><strong>Description:</strong> {{$project->description}}</p>
        <p>This projects was made : {{$project->created_at->diffForHumans()}}</p>


        @if(Auth::check())
            <div>
                <button type="button" class="btn btn-info "><a style="color:white" href="/send/{{$project->id}}">Application</a></button>
            </div>
        @else
            <div class="alert alert-info" role="alert"> If u want to applicate for this project, please register or
                login
            </div>
        @endif

        <div class="back">
            <button type="button" class="btn btn-info "><a style="color:white" href="/projects">Back</a></button>
        </div>



        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif

    </div>

@endsection