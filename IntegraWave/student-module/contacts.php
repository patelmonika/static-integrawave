<?php

$title = "contacts";
$selectedOption = "";

require_once "../Private/functions.php";

include_once "../Shared/header.php";

include_once "../Shared/left-navigation.php";
?>



<div class="wrapper">

    <div class="content-wrapper">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Contacts</h3>
                        <div class="box-tools pull-right">

                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form class="form-horizontal">
                        <div class="box-body">

                            <table id="example2" class="table table-bordered table-striped table-responsive">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Sukhpreet</td>
                                    <td>4167973634</td>
                                    <td>Sukhpreet@gmail.com</td>
                                    <td>
                                        <a href="#" data-toggle="modal" data-target="#edit-contact">Edit</a>/
                                        <a href="#" data-toggle="modal" data-target="#delete">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Osheen</td>
                                    <td>4167944554</td>
                                    <td>Osheen@gmail.com</td>
                                    <td>
                                        <a href="#" data-toggle="modal" data-target="#edit-contact">Edit</a>/
                                        <a href="#" data-toggle="modal" data-target="#delete" data-met-error="">Delete</a>
                                    </td>
                                </tr>
                            </table>

                            <div class="box-body">
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Name</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="semester" id="semester" placeholder="Add New ContactName Here" class="form-control">
                                    </div>
                                </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Phone</label>
                                        <div class="col-sm-6">
                                            <input type="text" name="semester" id="semester" placeholder="Add New Phone Here" class="form-control">
                                        </div>
                                    </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Email</label>
                                            <div class="col-sm-6">
                                                <input type="text" name="semester" id="semester" placeholder="Add New Email Here" class="form-control">
                                            </div>
                                        </div>
                                </div>
                            </div>
                            <div class="box-footer">
                                <button class="btn btn-primary pull-right" type="submit">Add</button>
                                <button class="btn btn-link btn-grey pull-right" type="submit">Cancel</button>
                            </div>
                        </div>
                        <div id="delete" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Delete</h4>
                                    </div>
                                    <div class="modal-body">
                                        <p>Are you sure you want to delete it?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-link btn-grey" data-dismiss="modal">Cancel</button>
                                        <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                <div id="edit-contact" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Edit Contact</h4>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label class="col-sm-3 control-label"> Name</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="cname" id="cname" value="Contact1" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Phone</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="phone" id="phone" value="67688990909" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Email</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="email" id="email" value="abc@gmail.com" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-link btn-grey" data-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-primary" data-dismiss="modal">Update</button>
                            </div>
                        </div>
                    </div>
                </div>
                        <!-- /.box-body -->
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
                <!-- /.box -->


<?php include_once "../Shared/footer.php"; ?>
