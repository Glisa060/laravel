<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * App\Model
 *
 * @mixin \Eloquent
 */
class Model extends Eloquent {

	protected $fillable = ['title', 'body', 'post_id', 'user_id', 'user_name',
		'password', 'email', 'password_confirmation'];
}
