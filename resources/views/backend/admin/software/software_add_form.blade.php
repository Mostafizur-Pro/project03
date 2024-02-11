<div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="largeModalLabel">Add Product</h5>

            </div>
            <div class="modal-body">


                <div class="col-lg-12">


                    <div class="card-body card-block">
                        <form action="{{route('admin.software.store')}}" method="post" enctype="multipart/form-data" class="form-horizontal">

                            @csrf

                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Software Name</label></div>
                                <div class="col-12 col-md-9">
                                <input type="text" id="text-input" name="sft_name" placeholder="Enter Product Name" required class="form-control"></div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Software Image</label></div>
                                <div class="col-12 col-md-9">
                                <input type="file" id="text-input" name="sft_image" placeholder="Enter Product Name" required class="form-control"></div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Software</label></div>
                                <div class="col-12 col-md-9">
                                <input type="file" id="text-input" name="file" placeholder="Enter Product Name" required class="form-control"></div>
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
