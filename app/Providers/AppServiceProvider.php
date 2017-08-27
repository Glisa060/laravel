<?php

namespace App\Providers;

use App;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{

	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot() {
		view()->composer( 'layouts.sidebar', function ( $view ) {
			$view->with( 'archives', App\Post::archives() );
		} );


	}

	/**
	 * Register any application services.
	 *
	 * @return void
	 */
	public function register() {
		if ( $this->app->environment() !== 'production') {
			$this->app->register(\Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class);
		}
		// ...
	}
}
