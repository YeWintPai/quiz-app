@extends('admin.layouts.app')

@section('header',"Quiz Choices")

@section('style')
<link rel="stylesheet" href="{{asset('/storage/jquery-dataTable/dataTables.dataTables.css')}}">
@endsection()

@section('content')
<table id="example" class="display" style="width:100%">
    <a href="{{url('/admin/choices/create')}}" class="btn btn-primary my-3">Create</a>
    <thead>
        <tr>
            <th>Actions</th>
            <th>Id</th>
            <th>Question ID</th>
            <th>Choice Text</th>
            <th>Is Correct</th>
            <th>Created At</th>
            <th>Updated At</th>
        </tr>
    </thead>
    <tbody>
       @foreach($data as $data)
       <tr>
            <td>
                <a href="{{url('/admin/choices/'.$data->id)}}" class="btn btn-info">Details</a>
                <a href="{{url('/admin/choices/'.$data->id.'/edit')}}" class="btn btn-warning">Edit</a>
                <button class="btn btn-danger btn-delete" data-id="{{$data->id}}">Delete</button>
                
            </td>
            <td>{{$data->id}}</td>
            <td>{{$data->question_id}}</td>
            <td>{{$data->choice_text}}</td>
            <td>{{$data->is_correct}}</td>
            <td>{{$data->created_at}}</td>
            <td>{{$data->updated_at}}</td>
       </tr>
       @endforeach()
    </tbody>
</table>
@endsection()

@section('script')
<script src="{{asset('/storage/jquery-dataTable/dataTables.js')}}"></script>
<script src="{{asset('/storage/sweetAlert/sweetalert2@11.js')}}"></script>
<script>
    $(document).ready(()=>{
        showMessage();
        function showMessage(){
            let message = "{{ session()->get('message') }}";
            if(message){
                    Swal.fire({
                            position: "top-end",
                            icon: "success",
                            title: message,
                            showConfirmButton: false,
                            timer: 1500
                    });
            }
        }
        new DataTable('#example');

        $(document).on('click','.btn-delete',(event)=>{
            deleteRecord(event);
        });
        

        function deleteRecord(event){
            let button = $(event.currentTarget);
            let id = button.data('id');  
            let row = button.parent().parent();

                Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
                }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type:"DELETE",
                        url:"/admin/choices/"+id,
                        data:{
                            _token:"{{csrf_token()}}"
                        },
                        success:(data)=>{
                            row.remove();
                            Swal.fire({
                                title:"Deleted!",
                                text:data,
                                icon:"success"
                            })
                        },
                        error:(error)=>{
                            console.log(error);
                        }
                    });
                };
                });
            }
    });
</script>
@endsection()