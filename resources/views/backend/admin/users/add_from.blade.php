<div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="largeModalLabel">Add User</h5>

            </div>
            <div class="modal-body">


                <div class="col-lg-12">


                    <div class="card-body card-block">
                        <form action="{{route('admin.user.store')}}" method="post" enctype="multipart/form-data" class="form-horizontal">

                            @csrf

                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">User Name</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="text-input" name="name" placeholder="Enter User Name" required class="form-control"></div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">User Email</label></div>
                                <div class="col-12 col-md-9"><input type="email" id="text-input" name="email" placeholder="Enter User Email" required class="form-control"></div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">User Password</label></div>
                                <div class="col-12 col-md-9"><input type="password" id="text-input" name="password" placeholder="Enter User Password" required class="form-control"></div>
                            </div>





                            <div class="row form-group">
                                <div class="col col-md-3"><label for="selectLg" class=" form-control-label">Role</label></div>
                                <div class="col-12 col-md-9">
                                    <select name="role_id" id="selectLg" class="form-control-lg form-control" required>
                                        <option></option>
                                        <option value= 1 >Admin</option>
                                        <option value= 2 >Editor</option>
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
