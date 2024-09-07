<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Feedback;
use App\Models\Choice;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;

class feedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $feedbacks = Feedback::select()->get();
        return view('admin.feedbacks.index')
            ->with('feedbacks',$feedbacks);  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inputs = [];
        $inputs['helpful'] = $request['helpful'];
        $inputs['msgDetail'] = $request['msgDetail'];
        $inputs['created_at'] = Carbon::now();

        $validator = Validator::make($request->all(),[
            "helpful" => "required",
            "msgDetail" => "required"
        ]);

        if($validator->fails()){
            return redirect('/app/feedback')
                ->withErrors($validator)
                ->withInput();
        }
        Feedback::insert($inputs);

        return redirect('/app/feedback');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function show(feedback $feedback)
    {
        $feedback = Feedback::select('*')->where('id',$feedback->id)->first();
        return view('admin.feedbacks.show')
            ->with('feedback',$feedback);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function edit(feedback $feedback)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, feedback $feedback)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function destroy(feedback $feedback)
    {
        $data = "Feedback is Deleted Successfully.";
        Feedback::where('id',$feedback->id)->delete();
        return response()->json($data,200);
    }
}
