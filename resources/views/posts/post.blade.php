<h2>

    <a class="navbar-link" href="/posts/{{ $post->id }}">

        <p1 class="blog-post-title">{{ $post->title }}</p1>

    </a>

</h2>

<p class="blog-post-meta">

    {{ $post->user->name }}
    {{ $post->created_at->toFormattedDateString() }}

</p>

<div class="blog-post">
    {{ $post->body }}
</div>


<p class="blog-post-meta">Comments:</p>


@foreach($post->comments as $comment)

    <ul class="list-group">
        <li class="list-group-item">

            <strong>{{ $comment->created_at->diffforhumans() }}</strong> :

            {{ $comment->body }}

        </li>
    </ul>
@endforeach


