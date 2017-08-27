<?php

// Home page
Route::get( '/', 'PostsController@index')->name('home');

// Route for creating a post
// Check if user is logged in as admin
Route::get( '/posts/create', function () {
	return auth()->check()
		? View::make( 'posts.create' )
		: View::make( 'sessions.create' );
} );

// Storing a post in DB
Route::post('/posts', 'PostsController@store');

// Showing posts
Route::get( '/posts/{post}','PostsController@show');

// Storing comments per post
Route::post('/posts/{post}/comments', 'CommentsController@store');

// Route to view for creating a new user
Route::get('/register', 'RegistrationsController@create');

// Storing a new user in DB
Route::post('/register', 'RegistrationsController@store');

// View for login
Route::get('/login', 'SessionsController@create');

// Logging in a user
Route::post( '/login', 'SessionsController@store' );

// Logging out a user
Route::get('/logout', 'SessionsController@destroy');




