@extends('admin.layouts.app')

@section('header','Question Details')

@section('content')
    <h5>Question Details</h5>
        <div>
            <a href="{{ url('/admin/questions') }}" class="btn btn-primary">Back</a>

            <table class="table mt-5">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Value</th>
                    </tr>
                </thead>
                <tbody>
                <tr>
                        <td>Question ID</td>
                        <td>
                            <p>{{$question->id}}</p>
                        </td>
                    </tr>
                    <tr>
                        <td>Question Text</td>
                        <td>
                            <p>{{$question->question_text}}</p>
                        </td>
                    </tr>
                    <tr>
                        <td>Language</td>
                        <td>
                            <p>{{$question->language}}</p>
                        </td>
                    </tr>
                    <tr>
                        <td>Difficulty</td>
                        <td>
                            <p>{{$question->difficulty}}</p>
                        </td>
                    </tr>
                    <tr>
                        <td>Created At</td>
                        <td>
                            <p>{{$question->created_at}}</p>
                        </td>
                    </tr>
                    <tr>
                        <td>Updated At</td>
                        <td>
                            <p>{{$question->updated_at}}</p>
                        </td>
                    </tr>
                </tbody>
            </table>
@endsection()