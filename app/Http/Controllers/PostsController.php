<?php namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\PostRequest;
use App\Post;
use App\Repositories\PostRepository;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PostsController extends Controller {

    public $postRepository;
    public function __construct(PostRepository $post)
    {
        $this->postRepository = $post;
        $this->middleware('admin');
    }

    public function index(Request $request)
    {
        if ($request->input('q')) {
            $searchPost = urldecode($request->input('q'));
            $posts = Post::where('title', 'LIKE', '%'.$searchPost.'%')->latest()->paginate(10);
        } else {
            $posts = Post::latest()->paginate(10);
            $searchPost = '';
        }
        return view('admin.post.index', compact('posts', 'searchPost'));
    }

    public function create()
    {
        return view('admin.post.create', $this->postRepository->create());
    }

    public function store(PostRequest $request)
    {
        $post = $this->postRepository->store($request);
        flash('Create post success!', 'success');
        return redirect('admin/categories/' . $post->category_id);
    }

    /**
     * display form for edit post
     * @param $id
     * @return $this
     */
    public function edit($id)
    {
        return view('admin.post.edit', $this->postRepository->edit($id));
    }


    public function update($id, PostRequest $request)
    {
       $post = $this->postRepository->update($request, $id);
        flash('Update post success!', 'success');
        return redirect('admin/categories/' . $post->category_id);
    }


}
