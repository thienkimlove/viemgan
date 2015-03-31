<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\QuestionRequest;
use App\Question;
use Illuminate\Http\Request;

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
		Question::create($request->all());
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
        $question->update($request->all());
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

}
