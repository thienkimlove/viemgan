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
            'right' => $request->input('right'),
            'hot' => $request->input('hot')
        ]);
        $this->syncTags($post, $request);
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
        $update = [
            'title' => $request->input('title'),
            'desc' => $request->input('desc'),
            'content' => $request->input('content'),
            'category_id' => $request->input('category_id'),
            'right' => $request->input('right'),
            'hot' => $request->input('hot')
        ];

        if ($request->file('image') && $request->file('image')->isValid()) {
            $update['image'] = $this->saveImage($request, $post->image);
        }
        $post->update($update);
        $this->syncTags($post, $request);
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
        $filename = md5(time()) . '.' . $request->file('image')->guessExtension();
        Image::make($request->file('image')->getRealPath())
            ->resize(500, 330)->save(public_path() . '/files/images/500_' . $filename)
            ->resize(288, 191)->save(public_path() . '/files/images/400_' . $filename)
            ->resize(235, 156)->save(public_path() . '/files/images/300_' . $filename)
            ->resize(220, 130)->save(public_path() . '/files/images/200_' . $filename)
            ->resize(115, 80)->save(public_path() . '/files/images/100_' . $filename);
        if ($old) {
            @unlink(public_path() . '/files/images/100_' . $old);
            @unlink(public_path() . '/files/images/200_' . $old);
            @unlink(public_path() . '/files/images/300_' . $old);
            @unlink(public_path() . '/files/images/400_' . $old);
            @unlink(public_path() . '/files/images/500_' . $old);
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
