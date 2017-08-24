@extends('layouts.master')


@section('content')
    <div class="col-md-8">
        <h1>Login Page</h1>

        <div class="form-group">
            <form method="post" action="/login">
                {{csrf_field()}}
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
                <button name="publish" style="margin-top: 5%" class="btn btn-primary">Login</button>
            </form>
        </div>

        @include('layouts.errors')

    </div>
@stop