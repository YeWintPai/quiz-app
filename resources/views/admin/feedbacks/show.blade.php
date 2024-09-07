@extends('admin.layouts.app')

@section('header','Feedback Details')

@section('content')
    <h5>Feedback Details</h5>
        <div>
            <a href="{{ url('/admin/feedbacks') }}" class="btn btn-primary">Back</a>

            <table class="table mt-5">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Value</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Feedback ID</td>
                        <td>
                            <p>{{$feedback->id}}</p>
                        </td>
                    </tr>
                    <tr>
                        <td>HelpFul</td>
                        <td>
                            <p>{{$feedback->helpful}}</p>
                        </td>
                    </tr>
                    <tr>
                        <td>Feedback Messege</td>
                        <td>
                            <p>{{$feedback->msgDetail}}</p>
                        </td>
                    </tr>
                        <td>Created At</td>
                        <td>
                            <p>{{$feedback->created_at}}</p>
                        </td>
                    </tr>
                    <tr>
                        <td>Updated At</td>
                        <td>
                            <p>{{$feedback->updated_at}}</p>
                        </td>
                    </tr>
                </tbody>
            </table>
@endsection()