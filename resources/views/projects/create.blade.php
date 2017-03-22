@extends('projects.master')


@section('content')

    <div class="col-sm-12 blog-main">

            <h1>Add new Project</h1>


            <form method="POST" action="/projects">
                {{csrf_field()}}
                <div>
                    <label for="title">Title:</label>
                    <input type="text" class="form-control" id="title" name="title" required>
                </div>


                <div class="form-group">
                    <label for="description">Description: </label>
                    <textarea type="text" class="form-control" id="description" name="description" required> </textarea>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Add</button>

                </div>

                @include('errors.errors')

            </form>



    </div>

@endsection