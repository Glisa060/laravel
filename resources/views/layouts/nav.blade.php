
<div class="blog-masthead">
    <div class="container">
        <nav class="blog-nav">
            <a class="blog-nav-item active" href="/">Home</a>
            <a class="blog-nav-item" href="#">New features</a>
            <a class="blog-nav-item" href="#">Press</a>
            <a class="blog-nav-item" href="#">New hires</a>
            <a class="blog-nav-item" href="#">About</a>
            <a class="blog-nav-item" href="/posts/create">Create a new post!</a>
            <a class="blog-nav-item" href="/register">Register!</a>
            <a class="blog-nav-item" href="/login">Login!</a>
            <a class="blog-nav-item" href="/logout">Logout!</a>
            @if (Auth::check())
                <a class="blog-nav-item" href="#">{{Auth::user()->user_name}}</a>
            @endif
        </nav>
    </div>
</div>

<div class="container">
    
<div class="blog-header">
    <h1 class="blog-title">The Bootstrap Blog</h1>
    <p class="lead blog-description">The official example template of creating a blog with Bootstrap.</p>
</div>