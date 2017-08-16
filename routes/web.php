<?php

Route::get( '/', 'PostsController@index');

Route::get( '/posts/create','PostsController@create');

Route::post('/posts', 'PostsController@store');

Route::get( '/posts/{post}','PostsController@show');

Route::post('posts/{id}','PostsController@store_comments');

Route::get('/posts/show', 'PostsController@show');





