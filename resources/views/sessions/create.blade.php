@extends('projects.master')


@section('content')

    <div class="col-sm-12 blog-main">

        <h1>Login</h1>

        <hr>
        <form method="POST" action="/login">
            {{csrf_field()}}

            <div class="form-group">
                <label for="email">Email: </label>
                <input type="email" class="form-control" id="email" name="email" required> </input>
            </div>
            <div class="form-group">
                <label for="password">Password: </label>
                <input type="password" class="form-control" id="password" name="password" required> </input>
            </div>


            <div class="form-group">
                <button type="submit" class="btn btn-primary">Login</button>

            </div>

            @include('errors.errors')

        </form>
    </div>

@endsection