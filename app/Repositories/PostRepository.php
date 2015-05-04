<?php namespace App\Repositories;

use App\Category;
use App\Post;
use App\Tag;
use Intervention\Image\Facades\Image;

class PostRepository extends BaseRepository
{
    public function __construct(Post $post)
    {
        $this->model = $post;
    }

    /**
     * list all category which do not have child categories.
     * @return array
     */
    public function create()
    {
        $tags = Tag::all()->lists('name', 'name');
        $categories = $this->getCategoriesList();
        return compact('categories', 'tags');
    }

    public function store($request)
    {
        $post = $this->model->create([
            'title' => $request->input('title'),
            'desc' => $request->input('desc'),
            'content' => $request->input('content'),
            'image' => ($request->file('image') && $request->file('image')->isValid()) ? $this->saveImage($request) : '',
            'category_id' => $request->input('category_id'),
            'right' => ($request->input('right') == 'on') ? true : false,
            'right_block' => ($request->input('right_block') == 'on') ? true : false,
            'status' => ($request->input('status') == 'on') ? true : false,
            'hot' => ($request->input('hot') == 'on') ? true : false,
            'status' => false
        ]);
        $this->syncTags($post, $request);
        return $post;
    }


    /**
     * get data for edit
     * @param $id
     * @return array
     */
    public function edit($id)
    {
        $tags = Tag::all()->lists('name', 'name');
        $post = $this->getById($id);
        $categories = $this->getCategoriesList();
        return compact('post', 'categories', 'tags');
    }

    public function update($request, $id)
    {
        $post = $this->getById($id);
        $update = $request->all();

        $update['hot'] = (!empty($update['hot']) && $update['hot'] == 'on') ? true : false;
        $update['right'] = (!empty($update['right']) && $update['right'] == 'on') ? true : false;
        $update['right_block'] = (!empty($update['right_block']) && $update['right_block'] == 'on') ? true : false;
        $update['status'] = (!empty($update['status']) && $update['status'] == 'on') ? true : false;

        if ($request->file('image') && $request->file('image')->isValid()) {
            $update['image'] = $this->saveImage($request, $post->image);
        }
        $post->update($update);
        $this->syncTags($post, $request);

        return $post;
    }

    /**
     * delete post
     * @param $id
     */
    public function delete($id)
    {
        $post = $this->getById($id);
        $post->delete();
    }

    protected function syncTags(Post $post, $request)
    {
        $tagIds = [];
        foreach ($request->input('tag_list') as $tag) {
            $tagIds[] = Tag::firstOrCreate(['name' => $tag])->id;
        }
        $post->tags()->sync($tagIds);
    }

    /**
     * save image and create resize thumb.
     * @param $request
     * @param null $old
     * @return string
     */
    protected function saveImage($request, $old = null)
    {
        $filename = md5(time()) . '.' . $request->file('image')->getClientOriginalExtension();
        $img = Image::make($request->file('image')->getRealPath());
        // resize the image to a width of 300 and constrain aspect ratio (auto height)
        $img->save(public_path() . '/files/images/' . $filename);

        if ($old) {
            @unlink(public_path() . '/files/images/' . $old);
        }
        return $filename;
    }

    /**
     * @return array
     */
    protected function getCategoriesList()
    {
        $categories = Category::all()
            ->filter(function ($item) {
                return $item->subCategories()->count() == 0;
            })
            ->lists('name', 'id');
        return $categories;
    }
}
