@extends('layouts.master')


@section('content')
    <div class="col-sm-8 blog-main">


        <h1>{{ $post->title }}</h1>

            {{ $post->body }}

        <div class="comments">
            @foreach($post->comments as $comment)

                <ul class="list-group">

                    <li class="list-group-item">
                            <strong>{{ $comment->created_at->diffforhumans() }}</strong>

                            {{ $comment->body }}
                    </li>

                </ul>

            @endforeach

        </div>
        {{--add a comment--}}
        <div class="col-sm-8">
            <h1>Create a Post</h1>

            <hr>

            <form method="post" action="/posts">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="exampleTitle">Title</label>
                    <input type="text" name='title' class="form-control">
                </div>
                <div class="form-group">
                    <label for="body">Text</label>
                    <textarea class="form-control" name="body" id="body" rows="3"></textarea>
                </div>
                <button type="submit" name="publish" class="btn btn-primary">Publish</button>
            </form>
        </div>

    </div>
@stop