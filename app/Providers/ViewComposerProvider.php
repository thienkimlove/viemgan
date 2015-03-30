<?php namespace App\Providers;

use App\Category;
use App\Post;
use Illuminate\Support\ServiceProvider;

class ViewComposerProvider extends ServiceProvider {

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
        view()->composer('frontend', function ($view) {
             $view->with('categories', Category::where('parent_id', null)->get());
        });
        view()->composer('frontend.right', function ($view) {
            $view->with('mostReads', Post::latest()->take(4)->get())
                 ->with('bestRates', Post::latest()->take(4)->get());
        });

        view()->composer('frontend.below', function($view){
            $view->with('staticSub', Category::whereIn('id', [2, 3])->get());
        });


	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

}
