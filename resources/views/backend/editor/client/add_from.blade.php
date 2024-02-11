<div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="largeModalLabel">Add Client</h5>

            </div>
            <div class="modal-body">


                <div class="col-lg-12">


                    <div class="card-body card-block">
                        <form action="{{route('editor.store.client')}}" method="post" enctype="multipart/form-data" class="form-horizontal">

                            @csrf

                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Client Name</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="text-input" name="client_name" placeholder="Enter Client Name" required class="form-control"></div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Client Address</label></div>
                                <div class="col-12 col-md-9"><textarea name="client_address" id="textarea-input" rows="9" placeholder="Enter Slient Address"  class="form-control"></textarea></div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Client Phone N.</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="text-input" name="client_phone" placeholder="Enter Slient Phone Number" required class="form-control"></div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Client Email</label></div>
                                <div class="col-12 col-md-9"><input type="email" id="text-input" name="client_email" placeholder="Enter Client Email"  class="form-control"></div>
                            </div>




                            <div class="row form-group">
                                <div class="col col-md-3"><label for="file-input" class=" form-control-label">Client Image</label></div>
                                <div class="col-12 col-md-9"><input type="file" id="file-input" name="client_image" class="form-control-file" required></div>
                            </div>


                            <div class="row form-group">
                                <div class="col col-md-3"><label for="selectLg" class=" form-control-label">Publication</label></div>
                                <div class="col-12 col-md-9">
                                    <select name="client_publication" id="selectLg" class="form-control-lg form-control" required>
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
