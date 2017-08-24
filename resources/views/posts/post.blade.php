<div class="blog-post">

    <h2 class="blog-post-title">

        <a class="navbar-link" href="/posts/{{ $post->id }}">

            <p1 style="margin-top: 10%; margin-bottom: 3%" class="blog-post-title"><div class="text-center">{{ $post->title }}</div></p1>

        </a>

    </h2>

    <p class="blog-post-meta; text-center" style="margin-top: 2%">
        {{ $post->user->name }}
        {{ $post->created_at->toFormattedDateString() }}

    </p>

    <div class="text-center" style="margin-top: 5%">
        <div class="list-group-item" style="margin-bottom: 5%">
            {{ $post->body }}
        </div>
    </div>

    <p1 style="margin-top: 10%; margin-bottom: 3%" class="blog-post-title"><div class="text-center">Comments: </div></p1>

        @foreach($post->comments as $comment)

            <ul class="list-group">
                <li class="list-group" style="margin-top: 5%">
                    <div class="text-center">
                        <strong>{{ $comment->created_at->diffforhumans() }}</strong> :
                    </div>
                    div class="comments">
                    <div class="text-center">
                        {{ $comment->body }}
                    </div>
                </li>
            </ul>
        @endforeach
    </div>

