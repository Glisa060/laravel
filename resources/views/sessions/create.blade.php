@extends('layouts.master')

@section('content')
    <div class="col-sm-8">

        <h1>Register</h1>

        <div class="form-group">
            <form method="post" action="/register">
                {{csrf_field()}}
                <label for="user_name">User Name</label>
                <input class="form-control" id="user_name" name="user_name" required>
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
                <label for="password_confirmation">Password Confirmation</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation"
                       required>
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
                <button name="publish" style="margin-top: 5%" class="btn btn-primary">Register</button>
            </form>
        </div>

            @include('layouts.errors')
    </div>
@stop