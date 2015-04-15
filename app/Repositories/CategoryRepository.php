<?php namespace App\Repositories;

use App\Category;
use App\Post;

class CategoryRepository extends BaseRepository
{
    public function __construct(Category $category)
    {
        $this->model = $category;
    }

    /**
     * render data for create form
     * @return array
     */
    public function create()
    {
        $parents = $this->model->where('parent_id', null)->lists('name', 'id');
        $parents = array_merge([0 => 'Choose category'], $parents);
        $layout = [1 => 'Layout Viêm gan Virus', 2 => 'Layout Dược liệu && Chia sẻ', 3 => 'Layout  Sản phẩm tốt cho gan'];
        return compact('parents', 'layout');
    }

    /**
     * create category
     * @param $request
     */
    public function store($request)
    {
        $this->model->create([
            'name' => $request['name'],
            'parent_id' => ($request['parent_id'] == 0) ? null : $request['parent_id'],
            'template' => $request['template'],
            'display_below' => (!empty($request['display_below']) && $request['display_below'] == 'on') ? true : false,
            'display_homepage_0' => (!empty($request['display_homepage_0']) && $request['display_homepage_0'] == 'on') ? true : false,
            'display_homepage_1' => (!empty($request['display_homepage_1']) && $request['display_homepage_1'] == 'on') ? true : false,
            'display_homepage_2' => (!empty($request['display_homepage_2']) && $request['display_homepage_2'] == 'on') ? true : false,
            'display_homepage_3' => (!empty($request['display_homepage_3']) && $request['display_homepage_3'] == 'on') ? true : false,
        ]);
    }

    /**
     * return the data for display in edit form of category.
     * @param $id
     * @return array
     */
    public function edit($id)
    {
        $category = $this->getById($id);
        $parents = $this->model->where('id', '<>', $id)->where('parent_id', null)->lists('name', 'id');
        $parents = array_merge([0 => 'Choose category'], $parents);
        $layout = [1 => 'Layout Viêm gan Virus', 2 => 'Layout Dược liệu && Chia sẻ', 3 => 'Layout Sản phẩm tốt cho gan'];
        return compact('category', 'parents', 'layout');
    }

    /**
     * update category
     * @param $request
     * @param $id
     */
    public function update($request, $id)
    {
        $category = $this->getById($id);
        //we do not allow category which have child have posts.
        if ($request['parent_id'] != 0 && $request['parent_id'] != $category->parent_id) {
            Post::where('category_id', $request['parent_id'])->update(['category_id' => $category->id]);
        }
        $category->update([
            'name' => $request['name'],
            'parent_id' => ($request['parent_id'] == 0) ? null : $request['parent_id'],
            'template' => $request['template'],
            'display_below' => (!empty($request['display_below']) && $request['display_below'] == 'on') ? true : false,
            'display_homepage_0' => (!empty($request['display_homepage_0']) && $request['display_homepage_0'] == 'on') ? true : false,
            'display_homepage_1' => (!empty($request['display_homepage_1']) && $request['display_homepage_1'] == 'on') ? true : false,
            'display_homepage_2' => (!empty($request['display_homepage_2']) && $request['display_homepage_2'] == 'on') ? true : false,
            'display_homepage_3' => (!empty($request['display_homepage_3']) && $request['display_homepage_3'] == 'on') ? true : false,
        ]);

    }

}
