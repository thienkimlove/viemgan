<?php namespace App\Providers;

use App\Category;
use App\Post;
use App\Question;
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
        view()->composer('frontend.most_read_special', function ($view) {
            $view->with('mostReads', Post::hot()->latest()->take(7)->get());
        });

        view()->composer('frontend.most_read_normal', function ($view) {
            $view->with('mostReads', Post::hot()->latest()->take(4)->get());
        });

        view()->composer('frontend.most_rates', function ($view) {
            $view->with('bestRates', Post::orderBy('likes', 'desc')->take(4)->get());
        });

        view()->composer('frontend.most_question', function ($view) {
            $view->with('mostQuestions', Question::latest()->take(4)->get());
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
