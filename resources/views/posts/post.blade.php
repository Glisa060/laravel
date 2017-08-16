<div class="blog-post">

    <h2 class="blog-post-title">

        <a href="/posts/{{ $post->id }}">

            {{ $post->title }}

        </a>

    </h2>

    <p class="blog-post-meta">{{ $post->created_at->toFormattedDateString() }}</p>

    <div class="blog-post">
        <div class="container">
            <p class="navbar-text"> {{ $post->body }} </p>
        </div>
    </div>

        <p class="text-primary">Comments:</p>

    <div class="comments">
        @foreach($post->comments as $comment)
            <ul class="text-info">

                <li class="comments">

                    <strong>{{ $comment->created_at->diffforhumans() }}</strong> :

                    {{ $comment->body }}

                </li>

            </ul>

        @endforeach
    </div>
</div><!-- /.blog-post -->
