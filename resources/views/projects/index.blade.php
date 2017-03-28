@extends('projects.master')


@section('content')

    <div class="col-sm-8 blog-main">

        <ul>
        @foreach($projects as $project)

              <li><strong>{{ucfirst($project->title) }}</strong></li>


        @endforeach
        </ul>


    </div>

    @endsection