@extends('projects.master')


@section('content')

    <div class="col-sm-12 blog-main">

        <ul>
            @foreach($projects as $project)

                <li><strong>{{ucfirst($project->title) }}</strong></li>
                <p>{{$project->description}}</p>

            @endforeach
        </ul>


        <div style="    margin-left: 500px;">
            {{ $projects->links() }}
        </div>

    </div>

@endsection