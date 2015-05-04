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
use Intervention\Image\Facades\Image;

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
            $posts = Post::where('status', true)->tagged($keyword)->latest()->paginate(20);
        } else {
            $posts = Post::where('status', true)->latest()->paginate(20);
        }
        return view('frontend.search', compact('posts', 'keyword'))->with([
            'meta_title' => ' Kết quả tìm kiếm từ khóa '.$keyword.' tại Viemgan.com.vn ',
            'meta_desc' => '',
            'meta_keywords' => $keyword,
        ]);
    }
});

//display images.

Route::get('render', function () {

    $image = Image::make(public_path() . '/files/images/600_' . Request::input('p'));

    if (Request::input('w') && Request::input('h')) {
        $image->fit(Request::input('w'), Request::input('h'));
    }

    return $image->response();
});


Route::resource('admin/banners', 'BannersController');
Route::resource('admin/videos', 'VideosController');
Route::resource('admin/categories', 'CategoriesController');
Route::resource('admin/posts', 'PostsController');
Route::resource('admin/questions', 'QuestionsController');
Route::resource('admin/contacts', 'ContactsController');
Route::post('saveContact', ['as' => 'saveContact', 'uses' => 'MainController@saveContact']);
Route::post('increaseLikes', ['as' => 'increaseLikes', 'uses' => 'MainController@increaseLikes']);

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('/{value}', function($value){
    if (preg_match('/([a-z0-9\-]+)\.html/', $value, $matches)) {
        $origin = $post = Post::where('slug', $matches[1])->first();
        $origin->views = $origin->views + 1;
        $origin->save();
        return view('frontend.post_details', compact('post'))->with([
            'meta_title' => $post->title. ' | Viemgan.com.vn ',
            'meta_desc' => $post->desc,
            'meta_keywords' => ($post->tagList)? implode(',', $post->tagList) : 'viemgan, huongdan, bai viet',
        ]);
    }
});
