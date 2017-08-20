@extends('layouts.master')


@section('content')
    <div class="col-sm-8 blog-main">

        <h1 class="text-center">{{ $post->title }}</h1>

        <div class="text-center" style="margin-top: 5%">
            <div class="list-group-item" style="margin-bottom: 5%">
                {{ $post->body }}
            </div>
        </div>

        <p2 style="margin-top: 10%; margin-bottom: 3%" class="blog-post-title"><div class="text-center">Comments: </div></p2>

        <div class="comments">
            @foreach($post->comments as $comment)

                <ul class="list-group">

                    <li class="list-group" style="margin-top: 5%">
                            <div class="text-center">
                                <strong>{{ $comment->created_at->diffforhumans() }}</strong> :
                            </div>

                            <div class="text-center">
                                {{ $comment->body }}
                            </div>
                    </li>

                </ul>

            @endforeach

                {{--add a comment--}}

                <div class="text-center" style="margin-top: 10%">

                    <h1>Create a Comment</h1>

                    <div class="form-group">

                        <hr>

                        <form method="post" action="/posts/{{ $post->id }}/comments">
                            {{csrf_field()}}
                            <label for="body">Comment</label>
                            <textarea class="form-control" name="body" id="body" rows="3" required></textarea>
                            <button type="submit" name="publish" style="margin-top: 5%" class="btn btn-primary">Add a Comment</button>
                        </form>

                        @include('layouts.errors')

                    </div>
                </div>
        </div>
    </div>
@stop