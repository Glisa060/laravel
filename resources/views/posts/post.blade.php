<div class="blog-post">

    <h2 class="blog-post-title">

        <a href="/posts/{{ $post->id }}">

            {{ $post->title }}

        </a>

    </h2>

    <p class="blog-post-meta">{{ $post->created_at->toFormattedDateString() }}</p>

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
</div><!-- /.blog-post -->
