<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Choice;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;

class ChoicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Choice::all();
        return view('admin.choices.index')
            ->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // Access the 'id' parameter from the URL
        $id = $request->query('id');

        return view('admin.choices.create',compact('id'));
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
                'question_id' => 'required|integer',
                'choice_text' => 'required|string',
                'is_correct' => 'required|boolean'
            ]
        );
        if($validator->fails()){
            return redirect('/admin/choices/create')
                ->withErrors($validator)
                ->withInput();
        }

        $inputs = [];
        $inputs['question_id'] = $request['question_id'];
        $inputs['choice_text'] = $request['choice_text'];
        $inputs['is_correct'] = $request['is_correct'];
        $inputs['created_at'] = Carbon::now();
        Choice::insert($inputs);
        session()->flash('message','Choice is created Successfully');
        return redirect('/admin/choices');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Choice  $choice
     * @return \Illuminate\Http\Response
     */
    public function show(Choice $choice)
    {
        $data = Choice::select("*")->where('id',$choice->id)->first();
        return view('admin.choices.show')
            ->with('data',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Choice  $choice
     * @return \Illuminate\Http\Response
     */
    public function edit(Choice $choice)
    {
        $data = Choice::where('id',$choice->id)->first();
        return view('admin.choices.edit')
            ->with('data',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Choice  $choice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Choice $choice)
    {
        $validator = Validator::make($request->all(),[
                'question_id' => 'required|integer',
                'choice_text' => 'required|string',
                'is_correct' => 'required|boolean'
        ]);

        if($validator->fails()){
            return redirect('/admin/choices/'.$choice->id.'/edit')
                ->withErrors($validator)
                ->withInput();
        }

        $inputs = [];
        $inputs['question_id'] = $request['question_id'];
        $inputs['choice_text'] = $request['choice_text'];
        $inputs['is_correct'] = $request['is_correct'];

        Choice::where('id',$choice->id)->update($inputs);
        session()->flash('message','Choice is updated Successfully');
        return redirect('/admin/choices');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Choice  $choice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Choice $choice)
    {
        $data = "Choice is Deleted Successfully.";
        Choice::where('id',$choice->id)->delete();
        return response()->json($data,200);
    }
}
