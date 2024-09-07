@extends('admin.layouts.app')

@section('header','Question Choices')

@section('content')
    <h5>Choice Details</h5>
        <div>
            <a href="{{ url('/admin/choices') }}" class="btn btn-primary">Back</a>

            <table class="table mt-5">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Value</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Choice ID</td>
                        <td>
                            <p>{{$data->id}}</p>
                        </td>
                    </tr>
                    <tr>
                        <td>Question ID</td>
                        <td>
                            <p>{{$data->question_id}}</p>
                        </td>
                    </tr>
                    <tr>
                        <td>Choice Text</td>
                        <td>
                            <p>{{$data->choice_text}}</p>
                        </td>
                    </tr>
                    <tr>
                        <td>Is Correct</td>
                        <td>
                            <p>{{$data->is_correct}}</p>
                        </td>
                    </tr>
                    <tr>
                        <td>Created At</td>
                        <td>
                            <p>{{$data->created_at}}</p>
                        </td>
                    </tr>
                    <tr>
                        <td>Updated At</td>
                        <td>
                            <p>{{$data->updated_at}}</p>
                        </td>
                    </tr>
                </tbody>
            </table>
@endsection()