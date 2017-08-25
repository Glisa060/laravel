<?php

namespace App;

use Carbon\Carbon;

/**
 * App\Post
 *
 * @property int $id
 * @property int $user_id
 * @property string $title
 * @property string $body
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Comment[] $comments
 * @property-read \App\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Post whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Post whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Post whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Post whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Post whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Post whereUserId($value)
 * @mixin \Eloquent
 */
class Post extends Model
{

	public function comments() {
		return $this->hasMany(Comment::class);
	}

	public function addComment($body) {

		$this->comments()->create(compact('body'));
	}

	public function user() {
		return $this->belongsTo(User::class);
	}

	public function scopeFilter( $query, $filters ) {
		if ( $month = $filters['month'] ) {
			$query->whereMonth( 'created_at', Carbon::parse( $month )->month );
		}

		if ( $year = $filters['year'] ) {
			$query->whereYear( 'created_at', Carbon::parse( $year )->year );
		}
	}
}
