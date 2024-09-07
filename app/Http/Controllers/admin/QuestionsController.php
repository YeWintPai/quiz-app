<?php

namespace App\Http\Controllers\admin;

use App\Models\Question;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;

class QuestionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Question::all();
        return view('admin.questions.index')
            ->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.questions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),[
                "question_text"=>"required|string",
                "language"=>"required",
                "difficulty"=>"required",
        ]);

        if($validator->fails()){
            return redirect('/admin/questions/create')
                ->withErrors($validator)
                ->withInput();
        }

        $inputs = [];
        $inputs['question_text'] = $request['question_text'];
        $inputs['language'] = $request['language'];
        $inputs['difficulty'] = $request['difficulty'];
        $inputs['created_at'] = Carbon::now();

        Question::insert($inputs);
        session()->flash('message','Question is created Successfully');
        return redirect('/admin/questions')
            ->with('msg','Question Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $question = Question::select('*')->where('id',$id)->first();
        // dd($question);
        return view('admin.questions.show')
            ->with('question',$question);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $question = Question::where('id',$id)->first();
        return view('admin.questions.edit')
            ->with('question',$question);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(),
        [
            "question_text"=>"required"
        ]);
        
        if($validator->fails()){
            return redirect('/admin/questions/'.$id.'/edit')
                ->withErrors($validator)
                ->withInput();
        }

        $inputs = [];
        $inputs['question_text'] = $request['question_text'];
        $inputs['difficulty'] = $request['difficulty'];
        $inputs['language'] = $request['language'];
        Question::where('id',$id)->update($inputs);
        session()->flash('message','Question is updated Successfully');
        return redirect('/admin/questions')
        ->with('msg','Updated the question successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = "Question is Deleted Successfully.";
        Question::where('id',$id)->delete();
        return response()->json($data,200);
    }
}
