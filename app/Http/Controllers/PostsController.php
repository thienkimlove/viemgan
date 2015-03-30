<?php namespace App\Http\Controllers;

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

    public function index()
    {
        $posts = Post::latest()->paginate(20);
        return view('admin.post.index', compact('posts'));
    }

    public function create()
    {
        return view('admin.post.create', $this->postRepository->create());
    }

    public function store(PostRequest $request)
    {
        $this->postRepository->store($request);
        flash('Create post success!', 'success');
        return redirect('admin/posts');
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
        $this->postRepository->update($request, $id);
        flash('Update post success!', 'success');
        return redirect('admin/posts');
    }


}
