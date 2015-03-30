<?php namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Post;
use Illuminate\Http\Request;

class MainController extends Controller
{

    public function index()
    {
        $page = 'index';
        $latestPost = Post::latest()->take(4)->get();
        $cateIds = Category::where('parent_id', 1)->lists('id');
        $rootCategoryLatest = Post::whereIn('category_id', $cateIds)->latest()->take(4)->get();

        $top2 = Post::where('category_id', 2)->latest()->take(8)->get();
        $top3 = Post::where('category_id', 3)->latest()->take(8)->get();
        $subData = Category::whereIn('id', [2, 3])->get();

        return view('frontend.index', compact('page', 'latestPost', 'rootCategoryLatest', 'top2', 'top3', 'subData'));
    }
    public function categoryDetails($slug)
    {
       $category = Category::where('slug', $slug)->first();
       $posts = Post::where('category_id', $category->id)->latest()->paginate(20);
       return view('frontend.category_details', compact('category', 'posts'));
    }

}
