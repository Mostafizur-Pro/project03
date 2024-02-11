@extends('backend.layouts.app')

@section('title','Edit Solution')
@section('css')

    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.css" rel="stylesheet">

@endsection
@section('content')
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="largeModalLabel">Edit Solution</h5>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

        </div>
        <div class="modal-body">


            <div class="col-lg-12">


                <div class="card-body card-block">
                    <form action="{{route('editor.update.solution',$solution->id)}}" method="post" enctype="multipart/form-data" class="form-horizontal">

                        @csrf

                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Solution Title</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="so_title" value="{{$solution->so_title}}" required class="form-control"></div>
                        </div>



                        <div class="row form-group">
                            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Solution Discription</label></div>
                            <div class="col-12 col-md-9">
                                <textarea id="summernote" name="so_discription">{{$solution->so_discription}}</textarea>
                            </div>
                        </div>


                        <div class="row form-group">
                            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Solution Photo</label></div>
                            <div class="col-12 col-md-9"><input type="file" id="file-input" name="so_image" accept="image/*"   onchange="readURL(this);" class="form-control-file"></div>

                        </div>


                        <div class="row form-group">
                            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Old photo</label></div>
                            <div class="col-12 col-md-9"><img  src="{{ URL::to($solution->so_image) }}" style="height: 90px; width: 90px;" /></div>
                            <input type="hidden"  name="old_photo" value="{{ $solution->so_image }}" >
                        </div>


                        <div class="row form-group">
                            <div class="col col-md-3"><label for="selectLg" class=" form-control-label">Publication</label></div>
                            <div class="col-12 col-md-9">
                                <select name="so_p_status" id="selectLg" class="form-control-lg form-control" required>
                                    <option value="{{$solution->so_p_status}}">{{$solution->so_p_status == 1?'Published':'Unpublished'}}</option>
                                    @if($solution->so_p_status == 1)
                                        <option value= 0 >Unpublished</option>
                                    @else
                                        <option value= 1 >Published</option>

                                     @endif
                                </select>
                            </div>
                        </div>


                </div>


            </div>





        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary">Save</button>
        </div>

        </form>
    </div>
@endsection


@section('js')

    <script src="{{asset('public/backend/assets/js/lib/data-table/datatables.min.js')}}"></script>

    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.js"></script>

    <script>

        $(document).ready(function() {
            $('#summernote').summernote();
        });

    </script>
@endsection
