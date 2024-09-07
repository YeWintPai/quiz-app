@extends('admin.layouts.app')

@section('header',"Feedbacks")

@section('style')
<link rel="stylesheet" href="{{asset('/storage/jquery-dataTable/dataTables.dataTables.css')}}">
@endsection()

@section('content')
<table id="example" class="display" style="width:100%">
    <thead>
        <tr>
            <th>Actions</th>
            <th>Id</th>
            <th>Is HelpFul</th>
            <th>Msg Details</th>
            <th>Created At</th>
            <th>Updated At</th>
        </tr>
    </thead>
    <tbody>
       @foreach($feedbacks as $feedback)
       <tr>
            <td>
                <a href="{{url('/admin/feedbacks/'.$feedback->id)}}" class="btn btn-info">Details</a>
                <button class="btn btn-danger btn-delete" data-id="{{$feedback->id}}">Delete</button>
                
            </td>
            <td>{{$feedback->id}}</td>
            <td>{{$feedback->helpful}}</td>
            <td>{{$feedback->msgDetail}}</td>
            <td>{{$feedback->created_at}}</td>
            <td>{{$feedback->updated_at}}</td>
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
                        url:"/admin/feedbacks/"+id,
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