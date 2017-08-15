@extends('layouts.master')


@section('content')
    <div class="col-sm-8 blog-main">


        <h1>{{ $post->title }}</h1>

            {{ $post->body }}

        <div class="comments">
            @foreach($post->comments as $comment)

                <ul class="list-group">

                    <li class="list-group-item">
                        <strong>{{ $comment->created_at->diffforhumans() }}</strong> :
                      {{ $comment->body }}

                    </li>

                </ul>

            @endforeach

        </div>

    </div>
@stop