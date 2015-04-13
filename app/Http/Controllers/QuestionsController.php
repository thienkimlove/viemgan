<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\QuestionRequest;
use App\Question;
use Intervention\Image\ImageManager;

class QuestionsController extends Controller {

    public function __construct()
    {
        $this->middleware('admin');
    }

    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$questions = Question::latest()->paginate(10);
        return view('admin.question.index', compact('questions'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.question.create');
	}

    /**
     * Store a newly created resource in storage.
     *
     * @param QuestionRequest $request
     * @return Response
     */
	public function store(QuestionRequest $request)
	{
		Question::create($this->questionRepository($request));
        flash('Create question success!', 'success');
        return redirect('admin/questions');
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
		$question = Question::findOrFail($id);
        return view('admin.question.edit', compact('question'));
	}

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @param QuestionRequest $request
     * @return Response
     */
	public function update($id, QuestionRequest $request)
	{
        $question =  Question::findOrFail($id);
        $question->update($this->questionRepository($request, $question->image));
        flash('Create question success!', 'success');
        return redirect('admin/questions');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        $question = Question::findOrFail($id);
        $question->delete();
        flash('Success deleted question!');
        return redirect('admin/questions');
	}

    /**
     * save image and create resize thumb.
     * @param $request
     * @param null $old_image
     * @return string
     * @internal param null $old
     */
    protected function questionRepository($request, $old_image = null)
    {
        $update = $request->all();
        if ($request->file('image') && $request->file('image')->isValid()) {
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
            if ($old_image) {
                @unlink(public_path() . '/files/images/100_' . $old_image);
                @unlink(public_path() . '/files/images/200_' . $old_image);
                @unlink(public_path() . '/files/images/300_' . $old_image);
                @unlink(public_path() . '/files/images/400_' . $old_image);
                @unlink(public_path() . '/files/images/500_' . $old_image);
                @unlink(public_path() . '/files/images/600_' . $old_image);
            }
            $update['image'] = $filename;
        }
       return $update;
    }
}
