@extends('admin.layouts.app')

@section('header','Edit Questions')

@section('content')
<a href="{{url('/admin/questions')}}" class="btn btn-primary">Back</a>
    <form action="{{url('/admin/questions/'.$question->id)}}" method="POST">
        @csrf()
        @method("PUT")
        <div class="mb-3">
            <label class="form-label">Question Text</label>
                <input type="text" class="form-control" name="question_text" value="{{$question->question_text}}">
                @if($errors->has('question_text'))
                <p class="text-danger">{{$errors->first('question_text')}}</p>
                @endif()
        </div>
        <div class="mb-3">
        <label class="form-label">Language</label>
            <div class="input-group mb-3">
                    <label class="input-group-text">Choose Language</label>
                        <select class="form-select" name="language">
                            <option value="html" {{ $question->language == 'html' ? 'selected' : '' }} >HTML</option>
                        </select>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">Difficulty</label>
            <div class="input-group mb-3">
                    <label class="input-group-text">Choose Difficulty</label>
                        <select class="form-select" name="difficulty">
                            <option value="easy" {{ $question->difficulty === 'easy' ? 'selected' : '' }} >Easy</option>
                            <option value="medium" {{ $question->difficulty === 'medium' ? 'selected' : '' }} >Medium</option>
                            <option value="hard" {{ $question->difficulty === 'hard' ? 'selected' : '' }} >Hard</option>
                        </select>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
@endsection()