<?php namespace App\Repositories;


use App\Banner;
use Intervention\Image\ImageManager;

class BannerRepository extends BaseRepository
{
    protected $bannerLists;
    public function __construct(Banner $banner)
    {
        $this->model = $banner;
        $this->bannerLists = [
            1 => 'Banner giữa trang chủ',
            2 => 'Banner cuối trang chủ',
            3 => 'Banner giữa cột phải',
            4 => 'Banner giữa trang trong',
            5 => 'Banner cuối trang trong'
        ];
    }

    public function index()
    {
       $banners = Banner::latest()->paginate(10);
       $listBanners = $this->bannerLists;
       return compact('banners', 'listBanners');
    }

    /**
     * create
     * @return array
     */
    public function create()
    {
        $listBanners = $this->bannerLists;
        return compact('listBanners');
    }

    public function store($request)
    {
        $this->model->create([
            'position' => $request->input('position'),
            'link' => $request->input('link'),
            'image' => ($request->file('image') && $request->file('image')->isValid()) ? $this->saveImage($request) : '',

        ]);

    }


    /**
     * get data for edit
     * @param $id
     * @return array
     */
    public function edit($id)
    {
        $banner = $this->getById($id);
        $listBanners = $this->bannerLists;
        return compact('banner', 'listBanners');
    }

    public function update($request, $id)
    {
        $banner = $this->getById($id);
        $update = $request->all();

        if ($request->file('image') && $request->file('image')->isValid()) {
            $update['image'] = $this->saveImage($request, $banner->image);
        }
        $banner->update($update);
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
        $img->save(public_path() . '/files/images/' . $filename);

        if ($old) {
            @unlink(public_path() . '/files/images/' . $old);
        }
        return $filename;
    }

}
