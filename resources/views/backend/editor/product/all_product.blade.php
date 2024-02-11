@extends('backend.layouts.app')

@section('title','All Product')

@section('css')

    <link rel="stylesheet" href="{{asset('public/backend/assets/css/lib/datatable/dataTables.bootstrap.min.css')}}">
    <link href="{{asset('public/backend/editor/summernote.css')}}" rel="stylesheet">

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
                        <strong class="card-title">Product</strong>
                        <a href="" data-toggle="modal" data-target="#largeModal" class="btn btn-sm btn-success pull-right ">Add Product</a>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>SL</th>
                                <th>Product Name</th>
                                <th>Solution</th>
                                <th>Product Image</th>
                                <th>Publication</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>


                            @foreach($product as $key => $products)
                                <tr>
                                    <td>{{$key + 1 }}</td>
                                    <td>{{str_limit($products->p_name,20)}}</td>
                                    <td>{{str_limit($products->so_title,20)}}</td>
                                    <td>
                                        <img src="{{asset($products->p_image)}}" style="width: 100px;height: 50px; border: 0px;" />
                                    </td>
                                    <td>
                                        @if($products->p_p_status == 1)
                                            <a href="{{route('editor.unpublished.product',$products->id)}}" class="btn btn-sm btn-danger" >Published</a>
                                        @else
                                            <a href="{{route('editor.published.product',$products->id)}}"class="btn btn-sm btn-info" >Unpublished</a>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{route('editor.view.product',$products->id)}}" class="btn btn-sm btn-primary"><i class="fa fa-eye"></i></a>
                                        <a href="{{route('editor.edit.product',$products->id)}}" class="btn btn-sm btn-info" ><i class="fa fa-edit"></i></a>

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


    @include('backend.editor.product.add_from')



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
    <script src="{{asset('public/backend/editor/summernote.js')}}"></script>


    <script>

        $(document).ready(function() {
            $('#summernote').summernote();
        });

    </script>
@endsection
