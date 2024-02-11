@extends('backend.layouts.app')

@section('title','All Client')

@section('css')

    <link rel="stylesheet" href="{{asset('public/backend/assets/css/lib/datatable/dataTables.bootstrap.min.css')}}">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.css" rel="stylesheet">


@endsection

@section('content')


    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Client</strong>

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif


                        <a href="" data-toggle="modal" data-target="#largeModal" class="btn btn-sm btn-success pull-right ">Add Client</a>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>SL</th>
                                <th>Client Name</th>
                                <th>Client Phone</th>
                                <th>Product Image</th>
                                <th>Publication</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>


                            @foreach($client as $key => $clients)
                                <tr>
                                    <td>{{$key + 1 }}</td>
                                    <td>{{$clients->client_name}}</td>
                                    <td>{{$clients->client_phone}}</td>
                                    <td>
                                        <img src="{{asset($clients->client_image)}}" style="width: 100px;height: 50px; border: 0px;" />
                                    </td>
                                    <td>
                                        @if($clients->client_publication == 1)
                                            <a href="{{route('admin.unpublished.client',$clients->id)}}" class="btn btn-sm btn-danger" >Published</a>
                                        @else
                                            <a href="{{route('admin.published.client',$clients->id)}}" class="btn btn-sm btn-info">Unpublished</a>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{route('admin.view.client',$clients->id)}}" class="btn btn-sm btn-primary"><i class="fa fa-eye"></i></a>
                                        <a href="{{route('admin.edit.client',$clients->id)}}" class="btn btn-sm btn-info" ><i class="fa fa-edit"></i></a>
                                        <a href="{{route('admin.delete.client',$clients->id)}}" class="btn btn-sm btn-danger" id="delete"><i class="fa fa-trash"></i></a>
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


    @include('backend.admin.client.add_from')



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
