@extends('backend.layouts.app')

@section('title','Edit Slider')

@section('content')
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="largeModalLabel">Slider Slider</h5>
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
                    <form action="{{route('editor.update.slider',$slider->id)}}" method="post" enctype="multipart/form-data" class="form-horizontal">

                        @csrf

                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Slider Title</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="s_title" value="{{$slider->s_title}}" required class="form-control"></div>
                        </div>


                        <div class="row form-group">
                            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Slider Discription</label></div>
                            <div class="col-12 col-md-9"><textarea name="s_discription" id="textarea-input" rows="9"  required class="form-control">{{$slider->s_discription}}</textarea></div>
                        </div>


                        <div class="row form-group">
                            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Slider Photo</label></div>
                            <div class="col-12 col-md-9"><input type="file" id="file-input" name="s_image" accept="image/*"   onchange="readURL(this);" class="form-control-file"></div>

                        </div>


                        <div class="row form-group">
                            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Old photo</label></div>
                            <div class="col-12 col-md-9"><img  src="{{ URL::to($slider->s_image) }}" style="height: 90px; width: 90px;" /></div>
                            <input type="hidden"  name="old_photo" value="{{ $slider->s_image }}" >
                        </div>


                        <div class="row form-group">
                            <div class="col col-md-3"><label for="selectLg" class=" form-control-label">Publication</label></div>
                            <div class="col-12 col-md-9">
                                <select name="s_p_status" id="selectLg" class="form-control-lg form-control" required>
                                    <option value="{{$slider->s_p_status}}">{{$slider->s_p_status == 1?'Published':'Unpublished'}}</option>
                                    @if($slider->s_p_status == 1)
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


