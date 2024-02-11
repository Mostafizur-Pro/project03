@extends('backend.layouts.app')

@section('title','Client Edit')

@section('css')

    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.css" rel="stylesheet">

@endsection

@section('content')
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="largeModalLabel">Edit Client</h5>
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
                    <form action="{{route('admin.update.client',$client->id)}}" method="post" enctype="multipart/form-data" class="form-horizontal">

                        @csrf

                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Client Name</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="client_name" value="{{$client->client_name}}" required class="form-control"></div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Client Phone</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="client_phone" value="{{$client->client_phone}}" required class="form-control"></div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Client Email</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="client_email" value="{{$client->client_email}}" required class="form-control"></div>
                        </div>


                        <div class="row form-group">
                            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Client Address</label></div>
                            <div class="col-12 col-md-9"><textarea name="client_address" id="textarea-input" rows="9"  required class="form-control">{{$client->client_address}}</textarea></div>
                        </div>


                        <div class="row form-group">
                            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Client Photo</label></div>
                            <div class="col-12 col-md-9"><input type="file" id="file-input" name="client_image" accept="image/*"   onchange="readURL(this);" class="form-control-file"></div>

                        </div>


                        <div class="row form-group">
                            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Old photo</label></div>
                            <div class="col-12 col-md-9"><img  src="{{ URL::to($client->client_image) }}" style="height: 90px; width: 90px;" /></div>
                            <input type="hidden"  name="old_photo" value="{{ $client->client_image }}" >
                        </div>


                        <div class="row form-group">
                            <div class="col col-md-3"><label for="selectLg" class=" form-control-label">Publication</label></div>
                            <div class="col-12 col-md-9">
                                <select name="client_publication" id="selectLg" class="form-control-lg form-control" required>
                                    <option value="{{$client->client_publication}}">{{$client->client_publication == 1?'Published':'Unpublished'}}</option>
                                    @if($client->p_p_status == 1)
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

