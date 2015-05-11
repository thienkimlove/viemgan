<?php namespace App\Providers;

use App\Banner;
use App\Category;
use App\Post;
use App\Question;
use App\Video;
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
             $view->with('categories', Category::where('parent_id', null)->orderBy('id', 'asc')->get());

        });
        view()->composer('frontend.most_read_special', function ($view) {
            $view->with('mostReads', Post::where('status', true)->hot()->latest()->take(7)->get());
        });

        view()->composer('frontend.most_read_normal', function ($view) {
            $view->with('mostReads', Post::where('status', true)->hot()->latest()->take(4)->get());
        });

        view()->composer('frontend.most_rates', function ($view) {
            $view->with('bestRates', Post::where('status', true)->where('right_block', true)->take(4)->get());
        });

        view()->composer('frontend.most_question', function ($view) {
            $view->with('mostQuestions', Question::latest()->take(4)->get());
        });

        view()->composer('frontend.below', function($view){
            $view->with('staticSub', Category::where('display_below', true)->get());
        });

        view()->composer('frontend.right', function($view){
            $view->with('video', Video::latest()->first());
        });

        view()->composer('frontend.banner', function ($view) {
            $view->with('displayBanners', Banner::latest()->get());

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
