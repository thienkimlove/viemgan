<?php namespace App\Http\Controllers;

use App\Category;
use App\Contact;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\ContactRequest;
use App\Post;
use App\Question;
use App\Tag;
use Illuminate\Http\Request;

class MainController extends Controller
{

    public function index()
    {
        $page = 'index';

        $latestPost = Post::hot(true)->latest()->take(5)->get();
        $categories = Category::latest()->get();

        $rootBlock = [];
        $top1Block = [];
        $top2Block = [];


        foreach ($categories as $category) {
            if ($category->display_homepage_0) {
                $rootBlock['category'] = $category;
                $cateIds = Category::where('parent_id', $category->id)->lists('id');
                $rootBlock['posts'] = Post::hot(true)->whereIn('category_id', $cateIds)->latest()->take(5)->get();
            }
            if ($category->display_homepage_1) {
                $top1Block['category'] = $category;
                $top1Block['posts'] = Post::hot(true)->where('category_id', $category->id)->latest()->take(6)->get();
            }
            /*if ($category->display_homepage_2) {
                $top2Block['category'] = $category;
                $top2Block['posts'] = Post::hot(true)->where('category_id', $category->id)->latest()->take(6)->get();
            }*/
            if ($category->display_homepage_2) {
                $top2Block['category'] = $category;
                $top2Block['posts'] = Post::hot(true)->where('category_id', $category->id)->latest()->take(6)->get();

            }
        }
        return view('frontend.index', compact('page', 'latestPost', 'rootBlock', 'top1Block', 'top2Block'))->with([
            'meta_title' => ' Trang chủ Viemgan.com.vn ',
            'meta_desc' => '',
            'meta_keywords' => '',
        ]);
    }

    public function categoryDetails($slug)
    {
        $category = Category::where('slug', $slug)->first();
        $page = $category->id;
        $latestPost = null;
        //viemgan virus.
        if ($category->template == 1 | $category->template == 2) {
            $latestPost = Post::where('category_id', $category->id)->latest()->take(5)->get();
            $posts = Post::where('category_id', $category->id)->latest()->skip(4)->paginate(10);
            $view = 'frontend.virus';
        }  else {
            //best_product.html
            $posts = Post::where('category_id', $category->id)->latest()->paginate(10);
            $view = 'frontend.category_details';
        }
        return view($view, compact('category', 'posts', 'latestPost', 'page'))->with([
            'meta_title' => $category->name,
            'meta_desc' => '',
            'meta_keywords' => $category->name,
        ]);
    }

    public function faq()
    {
        $page = 'faq';
        $questions = Question::latest()->paginate(10);
        return view('frontend.faq', compact('page', 'questions'))->with([
            'meta_title' => ' Hỏi Đáp | Viemgan.com.vn ',
            'meta_desc' => '',
            'meta_keywords' => 'hỏi đáp',
        ]);
    }

    public function contact()
    {
        $page = 'contact';
        return view('frontend.contact', compact('page'))->with([
            'meta_title' => ' Liên hệ | Viemgan.com.vn ',
            'meta_desc' => '',
            'meta_keywords' => 'liên hệ',
        ]);
    }

    public function tag($keyword)
    {
        $tag = Tag::where('slug', $keyword)->first();
        $posts = $tag->posts();
        return view('frontend.search', compact('posts', 'keyword'))->with([
            'meta_title' => ' Các bài viết với nhãn '.$keyword.' tại Viemgan.com.vn ',
            'meta_desc' => '',
            'meta_keywords' => $keyword,
        ]);
    }

    /**
     * save contact form.
     * @param ContactRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function saveContact(ContactRequest $request)
    {
        Contact::create($request->all());
        return redirect('/');
    }

    /**
     * ajax increase likes.
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function increaseLikes(Request $request)
    {
        $post = Post::findOrFail($request->input('post_id'));
        $post->likes = $post->likes + 1;
        $post->save();

        return \Response::json([]);
    }

}
