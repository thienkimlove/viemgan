<?php namespace App\Repositories;

use App\Category;
use App\Post;
use App\Tag;
use Intervention\Image\ImageManager;

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
            'hot' => ($request->input('hot') == 'on') ? true : false
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

        if ($request->file('image') && $request->file('image')->isValid()) {
            $update['image'] = $this->saveImage($request, $post->image);
        }
        $post->update($update);
        $this->syncTags($post, $request);

        return $post;
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
        $manager = new ImageManager(array('driver' => 'imagick'));
        $img = $manager->make($request->file('image')->getRealPath());
        // resize the image to a width of 300 and constrain aspect ratio (auto height)
        $img->resize(500, 330)->save(public_path() . '/files/images/600_' . $filename);
        $img->resize(414, 275)->save(public_path() . '/files/images/500_' . $filename);
        $img->resize(314, 209)->save(public_path() . '/files/images/400_' . $filename);
        $img->resize(282, 167)->save(public_path() . '/files/images/300_' . $filename);
        $img->resize(235, 156)->save(public_path() . '/files/images/200_' . $filename);
        $img->resize(115, 80)->save(public_path() . '/files/images/100_' . $filename);


          /*  ->resize(500, 330)->save(public_path() . '/files/images/600_' . $filename)
            ->resize(414, 275)->save(public_path() . '/files/images/500_' . $filename)
            ->resize(314, 209)->save(public_path() . '/files/images/400_' . $filename)
            ->resize(282, 167)->save(public_path() . '/files/images/300_' . $filename)
            ->resize(235, 156)->save(public_path() . '/files/images/200_' . $filename)
            ->resize(115, 80)->save(public_path() . '/files/images/100_' . $filename);*/
        if ($old) {
            @unlink(public_path() . '/files/images/100_' . $old);
            @unlink(public_path() . '/files/images/200_' . $old);
            @unlink(public_path() . '/files/images/300_' . $old);
            @unlink(public_path() . '/files/images/400_' . $old);
            @unlink(public_path() . '/files/images/500_' . $old);
            @unlink(public_path() . '/files/images/600_' . $old);
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
