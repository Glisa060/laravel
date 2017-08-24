<?php

namespace App\Http\Controllers;

use App\Post;

class PostsController extends Controller
{

	public function __construct() {
		$this->middleware( 'auth' )->except( [ 'index', 'show' ] );
	}

	public function index() {
    	$posts    = Post::latest()->get();
		$archives = Post::selectRaw( 'year(created_at) year, monthname(created_at) month, count(*) published' )
		                ->groupBy( 'year', 'month' )
		                ->get()->toArray();

		return view( 'posts.index', compact( 'posts', 'archives' ) );
    }

	public function create() {

    	return view('posts.create');
	}

	public function store() {

    	$this->validate(request(), [
    		'title' => 'required',
		    'body' => 'required'
	    ]);

		auth()->user()->publish( new Post( request( [ 'title', 'body' ] ) ) );

    	return redirect('/');
	}

	public function show(Post $post) {
    	return view('posts.show', compact('post'));
	}

}
