@extends('admin.layouts.app')

@section('header','Create Questions')

@section('content')
<a href="{{url('/admin/questions')}}" class="btn btn-primary">Back</a>
    <form action="{{url('/admin/questions')}}" method="POST">
        @csrf()
        <div class="mb-3">
            <label class="form-label">Question Text</label>
                <input type="text" class="form-control" name="question_text" value="{{old('question_text')}}">
                @if($errors->has('question_text'))
                <p class="text-danger">{{$errors->first('question_text')}}</p>
                @endif()
        </div>
        <div class="mb-3">
        <label class="form-label">Language</label>
            <div class="input-group mb-3">
                    <label class="input-group-text">Choose Language</label>
                        <select class="form-select" name="language">
                            <option value="html">HTML</option>
                        </select>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">Difficulty</label>
            <div class="input-group mb-3">
                    <label class="input-group-text">Choose Difficulty</label>
                        <select class="form-select" name="difficulty">
                            <option value="easy">Easy</option>
                            <option value="medium">Medium</option>
                            <option value="hard">Hard</option>
                        </select>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
@endsection()