@extends('projects.master')


@section('content')

    <div class="col-sm-8 blog-main">

        <ul>
        @foreach($projects as $project)

              <li><strong>{{ $project->title }}</strong></li>


        @endforeach
        </ul>


    </div>

    @endsection