<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\Post;

Route::get('/', 'MainController@index');
Route::get('/hoi-dap', 'MainController@faq');
Route::get('/lien-he', 'MainController@contact');
Route::get('admin', 'AdminController@index');
Route::get('chuyen-muc/{tag}', 'MainController@categoryDetails');
Route::get('tu-khoa/{tag}', 'MainController@tag');

/*
 * for searching
 */
Route::get('search/{tag}', function($tag) {
    if (preg_match('/tag-([a-z0-9\-]+)/', $tag, $matches)) {
        $keyword = $matches[1];
        $keyword = str_replace('-',' ', $keyword);
        if (strlen($keyword) > 2) {
            $posts = Post::tagged($keyword)->latest()->paginate(20);
        } else {
            $posts = Post::latest()->paginate(20);
        }
        return view('frontend.search', compact('posts', 'keyword'));
    }
});



Route::resource('admin/categories', 'CategoriesController');
Route::resource('admin/posts', 'PostsController');
Route::resource('admin/questions', 'QuestionsController');
Route::resource('admin/contacts', 'ContactsController');
Route::post('saveContact', ['as' => 'saveContact', 'uses' => 'MainController@saveContact']);

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('/{value}', function($value){
    if (preg_match('/([a-z0-9\-]+)\.html/', $value, $matches)) {
        $post = Post::where('slug', $matches[1])->first();
        return view('frontend.post_details', compact('post'));
    }
});
