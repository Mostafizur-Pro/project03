<div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="largeModalLabel">Add Product</h5>

            </div>
            <div class="modal-body">


                <div class="col-lg-12">


                    <div class="card-body card-block">
                        <form action="{{route('editor.store.product')}}" method="post" enctype="multipart/form-data" class="form-horizontal">

                            @csrf

                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Product Name</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="text-input" name="p_name" placeholder="Enter Product Name" required class="form-control"></div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-3"><label for="selectLg" class=" form-control-label">Solution</label></div>
                                <div class="col-12 col-md-9">
                                    <select name="solution_id" id="selectLg" class="form-control-lg form-control" required>
                                        <option></option>
                                        @foreach($solutions as $solution)
                                        <option value="{{$solution->id}}" >{{$solution->so_title}}</option>
                                         @endforeach
                                    </select>
                                </div>
                            </div>


                            <div class="row form-group">
                                <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Product Features</label></div>
                                <div class="col-12 col-md-9">
                                    <textarea id="summernote" name="p_features" style="float:center;" ></textarea>
                                </div>
                            </div>


                            <div class="row form-group">
                                <div class="col col-md-3"><label for="file-input" class=" form-control-label">Product Image</label></div>
                                <div class="col-12 col-md-9"><input type="file" id="file-input" name="p_image" class="form-control-file" required></div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-3"><label for="file-input" class=" form-control-label">Brand Logo</label></div>
                                <div class="col-12 col-md-9"><input type="file" id="file-input" name="brand_logo" class="form-control-file" required></div>
                            </div>


                            <div class="row form-group">
                                <div class="col col-md-3"><label for="selectLg" class=" form-control-label">Publication</label></div>
                                <div class="col-12 col-md-9">
                                    <select name="p_p_status" id="selectLg" class="form-control-lg form-control" required>
                                        <option></option>
                                        <option value= 1 >Published</option>
                                        <option value= 0 >Unpublished</option>
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
    </div>
</div>
