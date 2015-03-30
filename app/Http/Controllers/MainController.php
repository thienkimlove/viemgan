<?php namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Post;
use App\Tag;
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
       $page = $category->id;
       $posts = Post::where('category_id', $category->id)->latest()->paginate(10);
        $latestPost = null;
       if ($category->id == 4) {
           $latestPost = Post::where('category_id', 4)->take(4)->get();
       }
       $view = ($category->id == 4) ? 'frontend.virus' : 'frontend.category_details';
       return view($view, compact('category', 'posts', 'latestPost', 'page'));
    }

    public function faq()
    {
       $page = 'faq';
       return view('frontend.faq', compact('page'));
    }
    public function contact()
    {
       $page = 'contact';
       return view('frontend.contact', compact('page'));
    }
    public function tag($keyword)
    {
        $tag = Tag::where('slug', $keyword)->first();
        $posts = $tag->posts();
        return view('frontend.search', compact('posts', 'keyword'));
    }

}
