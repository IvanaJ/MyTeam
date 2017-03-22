@extends('projects.master')


@section('content')

<div class="col-sm-12 blog-main">


<h2>Title: {{ucwords($project->title)}}</h2>

    <p><strong>Description:</strong> {{$project->description}}</p>
   <p>This projects was made : {{$project->created_at->diffForHumans()}}</p>
    <div class="back">
        <button type="button" class="btn btn-info "><a href="/projects">Back</a></button>
    </div>


</div>

@endsection