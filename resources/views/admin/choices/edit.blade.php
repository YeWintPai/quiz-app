@extends('admin.layouts.app')

@section('header','Edit Choices')

@section('content')
<a href="{{url('/admin/choices')}}" class="btn btn-primary">Back</a>
    <div class="mb-3">
        <label class="form-label">Question </label>
        <div style="border:1px solid gray;border-radius:10px;background-color:yellow;height:100px">
            <p class="text-center">{{$data->question_id}}</p>
            <p class="text-center text-danger">*This need to be fixed too*</p>
        </div>
        
    </div>
    <div class="question_text">

    </div>
    <form action="{{url('/admin/choices/'.$data->id)}}" method="POST">
        @csrf()
        @method("PUT")
        <div class="mb-3">
            <label class="form-label">Question ID</label>
                <input type="text" class="form-control" name="question_id" value="{{$data->question_id}}">
                @if($errors->has('question_id'))
                <p class="text-danger">{{$errors->first('question_id')}}</p>
                @endif()
        </div>
        <div class="mb-3">
        <label class="form-label">Choice Text</label>
                <input type="text" class="form-control" name="choice_text" value="{{$data->choice_text}}">
                @if($errors->has('choice_text'))
                <p class="text-danger">{{$errors->first('choice_text')}}</p>
                @endif()
        </div>
        <div class="mb-3">
            <label class="form-label">Is Correct</label>
            <div class="input-group mb-3">
                    <label class="input-group-text">Is Correct</label>
                    <select class="form-select" name="is_correct">
                        <option value="0" {{$data->is_correct == 0 ? 'selected' : '' }} >False</option>
                        <option value="1" {{$data->is_correct == 1 ? "selected" : "" }} >True</option>
                    </select>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
@endsection()