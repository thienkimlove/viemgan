<?php namespace App\Http\Controllers;


use App\Banner;
use App\Http\Requests;
use App\Http\Requests\BannerRequest;
use App\Repositories\BannerRepository;
use Illuminate\Http\Request;

class BannersController extends Controller {

    public $bannerRepository;
    public function __construct(BannerRepository $banner)
    {
        $this->bannerRepository = $banner;
        $this->middleware('admin');
    }

    public function index()
    {
        return view('admin.banner.index', $this->bannerRepository->index());
    }

    public function create()
    {
        return view('admin.banner.create', $this->bannerRepository->create());
    }

    public function store(BannerRequest $request)
    {
        $this->bannerRepository->store($request);
        flash('Create banner success!', 'success');
        return redirect('admin/banners');
    }

    /**
     * display form for edit post
     * @param $id
     * @return $this
     */
    public function edit($id)
    {
        return view('admin.banner.edit', $this->bannerRepository->edit($id));
    }


    public function update($id, BannerRequest $request)
    {
        $this->bannerRepository->update($request, $id);
        flash('Update banner success!', 'success');
        return redirect('admin/banners');
    }


}
