@extends('admin.layouts.app')

@section('header','Create Choices')

@section('content')
<a href="{{url('/admin/choices')}}" class="btn btn-primary">Back</a>
    <form action="{{url('/admin/choices')}}" method="POST">
        @csrf()
        <div class="mb-3">
            <label class="form-label">Question ID</label>
                <input type="text" class="form-control" name="question_id" value="{{old('question_id',$id)}}">
                @if($errors->has('question_id'))
                <p class="text-danger">{{$errors->first('question_id')}}</p>
                @endif()
        </div>
        <div class="mb-3">
        <label class="form-label">Choice Text</label>
            <input type="text" class="form-control" name="choice_text" value="{{old('choice_text')}}">
                    @if($errors->has('choice_text'))
                    <p class="text-danger">{{$errors->first('choice_text')}}</p>
                    @endif()
        </div>
        <div class="mb-3">
            <label class="form-label">Is Correct</label>
            <div class="input-group mb-3">
                    <label class="input-group-text">Is Correct</label>
                        <select class="form-select" name="is_correct">
                            <option value="0">False</option>
                            <option value="1">True</option>
                        </select>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
@endsection()