@extends('projects.master')


@section('content')

    <div class="col-sm-12 blog-main">

        <h1>Register</h1>

        <hr>
        <form method="POST" action="/register">
            {{csrf_field()}}
            <div>
                <label for="name">First Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>


            <div class="form-group">
                <label for="last_name">Last Name: </label>
                <input type="text" class="form-control" id="last_name" name="last_name" required> </input>
            </div>

            <div class="form-group">
                <label for="email">Email: </label>
                <input type="email" class="form-control" id="email" name="email" required> </input>
            </div>
            <div class="form-group">
                <label for="password">Password: </label>
                <input type="password" class="form-control" id="password" name="password" required> </input>
            </div>
            <div class="form-group">
                <label for="password_confirmation">Confirm Password: </label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation"
                       required> </input>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Register</button>

            </div>

            @include('errors.errors')

        </form>
    </div>

@endsection