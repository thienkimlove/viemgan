<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\VideoRequest;
use App\Video;

class VideosController extends Controller {

    public function __construct()
    {
        $this->middleware('admin');
    }
	public function index()
	{
	   $videos = Video::latest()->paginate(10);
       return view('admin.video.index', compact('videos'));
	}
    public function create()
    {
        return view('admin.video.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param QuestionRequest|VideoRequest $request
     *
     * @return Response
     */
    public function store(VideoRequest $request)
    {
        Video::create($request->all());
        flash('Create video success!', 'success');
        return redirect('admin/videos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $video = Video::findOrFail($id);
        return view('admin.video.edit', compact('video'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int                         $id
     * @param QuestionRequest|VideoRequest $request
     *
     * @return Response
     */
    public function update($id, VideoRequest $request)
    {
        $video =  Video::findOrFail($id);
        $video->update($request->all());
        flash('Edit video success!', 'success');
        return redirect('admin/videos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $video = Video::findOrFail($id);
        $video->delete();
        flash('Success deleted video!');
        return redirect('admin/videos');
    }

}
