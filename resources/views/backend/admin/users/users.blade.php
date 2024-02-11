@extends('backend.layouts.app')

@section('title','All Users')

@section('css')

    <link rel="stylesheet" href="{{asset('public/backend/assets/css/lib/datatable/dataTables.bootstrap.min.css')}}">


@endsection

@section('content')


    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <strong class="card-title">User</strong>

                        <a href="" data-toggle="modal" data-target="#largeModal" class="btn btn-sm btn-success pull-right ">Add User</a>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>SL</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>


                            @foreach($users as $key => $user)
                                <tr>
                                    <td>{{$key + 1 }}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->role_id == 1?'Admin':'Editor'}}</td>

                                    <td>
                                        {{--<a href="{{route('admin.view.solution',$solution->id)}}" class="btn btn-sm btn-primary">view</a>--}}
                                        <a href="" class="btn btn-sm btn-info" ><i class="fa fa-edit"></i></a>
                                        @if($user->id == 1)
                                             <a href="#" class="btn btn-sm btn-danger" disabled="disabled"  id="delete"><i class="fa fa-trash"></i></a>
                                            @else
                                            <a href="{{route('admin.user.delete',$user->id)}}" class="btn btn-sm btn-danger" id="delete"><i class="fa fa-trash"></i></a>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach




                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>
    </div><!-- .animated -->


    @include('backend.admin.users.add_from')



@endsection


@section('js')

    <script src="{{asset('public/backend/assets/js/lib/data-table/datatables.min.js')}}"></script>
    <script src="{{asset('public/backend/assets/js/lib/data-table/dataTables.bootstrap.min.j')}}s"></script>
    <script src="{{asset('public/backend/assets/js/lib/data-table/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('public/backend/assets/js/lib/data-table/buttons.bootstrap.min.js')}}"></script>
    <script src="{{asset('public/backend/assets/js/lib/data-table/jszip.min.js')}}"></script>
    <script src="{{asset('public/backend/assets/js/lib/data-table/vfs_fonts.js')}}"></script>
    <script src="{{asset('public/backend/assets/js/lib/data-table/buttons.html5.min.js')}}"></script>
    <script src="{{asset('public/backend/assets/js/lib/data-table/buttons.print.min.js')}}"></script>
    <script src="{{asset('public/backend/assets/js/lib/data-table/buttons.colVis.min.js')}}"></script>
    <script src="{{asset('public/backend/assets/js/init/datatables-init.js')}}"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#bootstrap-data-table-export').DataTable();
        } );
    </script>

    <script>
        $(document).on("click", "#delete", function(e){
            e.preventDefault();
            var link = $(this).attr("href");
            swal({
                title: "Are you Want to delete?",
                text: "Once Delete, This will be Permanently Delete!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
                .then((willDelete) => {
                    if (willDelete) {
                        window.location.href = link;
                    } else {
                        swal("Safe Data!");
                    }
                });
        });
    </script>

@endsection
