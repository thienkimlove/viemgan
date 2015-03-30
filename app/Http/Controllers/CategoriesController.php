<?php namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\CategoryRequest;
use App\Repositories\CategoryRepository;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;

class CategoriesController extends Controller
{
    public $categoryRepository;

    /**
     * Create instance with repository.
     * @param CategoryRepository $categoryRepository
     */
    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
        $this->middleware('admin');
    }

    public function index()
    {
        $categories = Category::latest()->get();
        return view('admin.category.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.category.create', $this->categoryRepository->create());
    }

    public function store(CategoryRequest $request)
    {
        $this->categoryRepository->store($request->all());
        flash('Create category success!', 'success');
        return redirect('admin/categories');
    }


    /**
     * display form for edit category
     * @param $id
     * @return $this
     */
    public function edit($id)
    {
       return view('admin.category.edit', $this->categoryRepository->edit($id));
    }

    /**
     * @param $id
     * @param CategoryRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, CategoryRequest $request)
    {
         $this->categoryRepository->update($request->all(), $id);
         flash('Update category success!', 'success');
         return redirect('admin/categories');
    }

}
