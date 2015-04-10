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
        $cateIds = Category::where('parent_id', 1)->lists('id');
        $rootCategoryLatest = Post::hot(true)->whereIn('category_id', $cateIds)->latest()->take(5)->get();

        $top2 = Post::hot(true)->where('category_id', 9)->latest()->take(8)->get();
        $top3 = Post::hot(true)->where('category_id', 3)->latest()->take(8)->get();
        $subData = Category::where('id', 2)->first();

        return view('frontend.index', compact('page', 'latestPost', 'rootCategoryLatest', 'top2', 'top3', 'subData'))->with([
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
            $latestPost = Post::where('category_id', 4)->latest()->take(5)->get();
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
