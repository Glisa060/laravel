<?php

Route::get( '/', 'PostsController@index');

Route::get( '/posts/create','PostsController@create');

Route::post('/posts', 'PostsController@store');

Route::get( '/posts/{post}','PostsController@show');

Route::get( '/posts', 'PostsController@show2');

Route::get('/posts/show', 'PostsController@show');





