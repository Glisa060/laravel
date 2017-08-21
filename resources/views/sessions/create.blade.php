@extends('layouts.master')

@section('content')
    <div class="col-sm-8">

        <h1>Register</h1>

        <div class="form-group">
            <form method="post" action="/register">
                {{csrf_field()}}
                <label for="user_name">User Name</label>
                <input  class="form-control" name="user_name"   required>
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password"   required>
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" class="form-control" name="password_confirmation"   required>
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email"   required>
                <button name="publish" style="margin-top: 5%" class="btn btn-primary">Register</button>
            </form>
        </div>

        <div class="form-group">
            @include('layouts.errors')
        </div>

    </div>
@stop