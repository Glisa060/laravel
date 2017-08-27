@extends('layouts.master')

@section('content')
    <div class="col-sm-8">

        <h1>Create a Post</h1>

        <hr>

        <form method="post" action="/posts">
            {{csrf_field()}}
            <div class="form-group">
                <label for="title">Title</label>
                <input id="title" name='title' class="form-control">
            </div>
            <div class="form-group">
                <label for="body">Text</label>
                <textarea class="form-control" name="body" id="body" rows="3"></textarea>
            </div>
            <div class="form-group">
                <button name="publish" class="btn btn-primary">Publish</button>
            </div>
        </form>
    </div>

@stop