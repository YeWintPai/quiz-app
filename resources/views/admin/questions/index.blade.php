@extends('admin.layouts.app')

@section('header',"Quiz Questions")

@section('style')
<link rel="stylesheet" href="{{asset('/storage/jquery-dataTable/dataTables.dataTables.css')}}">
@endsection()

@section('content')
<table id="example" class="display" style="width:100%">
    <a href="{{url('/admin/questions/create')}}" class="btn btn-primary my-3">Create</a>
    <thead>
        <tr>
            <th>Actions</th>
            <th>Id</th>
            <th>Question Text</th>
            <th>Language</th>
            <th>Difficulty</th>
            <th>Created At</th>
            <th>Updated At</th>
        </tr>
    </thead>
    <tbody>
       @foreach($data as $data)
       <tr>
            <td>
                <a href="{{url('/admin/questions/'.$data->id)}}" class="btn btn-info">Details</a>
                <a href="{{url('/admin/questions/'.$data->id.'/edit')}}" class="btn btn-warning">Edit</a>
                <button class="btn btn-danger btn-delete" data-id="{{$data->id}}">Delete</button>
                <a href="{{url('/admin/choices/create')}}" data-id="{{$data->id}}" class="btn btn-secondary create-choice-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
                    </svg>
                </a>
            </td>
            <td>{{$data->id}}</td>
            <td>{{$data->question_text}}</td>
            <td>{{$data->language}}</td>
            <td>{{$data->difficulty}}</td>
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

        //pass id to a url
        $(document).on('click', '.create-choice-btn', function(event) {
            event.preventDefault(); // Prevent the default anchor click behavior
            const id = $(this).data('id'); // Get the data-id attribute
            window.location.href = `/admin/choices/create?id=${id}`; // Redirect with the id as a query parameter
        });

        //delete data function
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
                        url:"/admin/questions/"+id,
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