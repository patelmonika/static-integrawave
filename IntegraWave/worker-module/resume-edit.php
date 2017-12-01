<?php

$title = "Resume Wizard";
$selectedOption = "Worker,Resume,Customize Resume";

require_once "../Private/functions.php";

include_once "../Shared/header.php";

include_once "../Shared/left-navigation.php";
?>

<div class="wrapper">
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Resume Wizard
                <small>Customize your Resume</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="resume-print.php">
                    <button class="btn btn-primary pull-right" type="submit">Print Resume</button></a> </li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <!-- Your Page Content Here -->

            <!-- left column -->
            <div class="col-sm-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Personal Information </h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form class="form-horizontal">
                        <div class="box-body">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Name </label>
                                <div class="col-sm-9">
                                    <input type="text" value="Jane" class="form-control" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="text" value="Jane@email.com" class="form-control" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Address</label>
                                <div class="col-sm-9">
                                    <input type="text" value="67, bumblebee street" class="form-control" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">City</label>
                                <div class="col-sm-9">
                                    <input type="text" value="Guelph" class="form-control" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Pin-Code</label>
                                <div class="col-sm-9">
                                    <input type="text" value="6L6 L6L" class="form-control" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Province</label>
                                <div class="col-sm-9">
                                    <select class="form-control">
                                        <option>Ontario</option>
                                        <option>Alberta</option>
                                        <option>New Brunswick</option>
                                        <option>Manitoba</option>
                                        <option>Prince Edward Island</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Job Category</label>
                                <div class="col-sm-9">
                                    <input type="text" value="Full Stack Developer" class="form-control" disabled>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <button class="btn btn-primary pull-right" type="submit">Save Changes</button>
                        </div>
                        <!-- /.box-footer -->
                    </form>
                </div>
                <!-- /.box -->
            </div>
            <!--/.col (left) -->
            <!-- 2nd column-->
            <div class="col-sm-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Summary </h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form class="form-horizontal">
                        <div class="box-body">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Summary</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" rows="10" placeholder="Click here to edit ..."></textarea>
                                </div>
                            </div>

                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <button class="btn btn-primary pull-right" type="submit">Save Changes</button>
                        </div>
                        <!-- /.box-footer -->
                    </form>
                </div>
                <!-- /.box -->
            </div>
            <!-- /.2nd column-->
            <!-- 3rd column-->
            <div class="col-sm-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Education </h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form class="form-horizontal">
                        <div class="box-body">
                            <div class="form-group">
                                <form class="form-horizontal">
                                    <div class="box-body">

                                        <table id="schedule" class="table table-bordered table-striped table-responsive">
                                            <thead>
                                            <tr>
                                                <th>Degree or Major</th>
                                                <th>School</th>
                                                <th>Status</th>
                                                <th>Location</th>
                                                <th>Completion Date</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>Post Graduation</td>
                                                <td>Humber College</td>
                                                <td>Graduating</td>
                                                <td>Toronto</td>
                                                <td>30 April, 2018</td>
                                                <td>
                                                    <a href="#" data-toggle="modal" data-target="#edit-education">Edit</a>/
                                                    <a href="#" data-toggle="modal" data-target="#delete">Delete</a>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>

                                        <div class="box-body">
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Degree or Major</label>
                                                <div class="col-sm-6">
                                                    <input type="text" name="degree" id="degree" placeholder="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">School</label>
                                                <div class="col-sm-6">
                                                    <input type="text" name="school" id="school" placeholder="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Status</label>
                                                <div class="col-sm-6">
                                                    <select class="form-control">
                                                        <option>Graduated</option>
                                                        <option>Graduating</option>
                                                        <option>Enrolled</option>
                                                        <option>Deferred</option>
                                                        <option>Transferred</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Completion Date</label>
                                                <div class="col-sm-6">
                                                    <input type="text" name="date" id="date" placeholder="" class="form-control">
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
                                    <div id="edit-education" class="modal fade" role="dialog">
                                        <div class="modal-dialog">
                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Education</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Degree or Major</label>
                                                        <div class="col-sm-6">
                                                            <input type="text" name="degree" id="deg" placeholder="" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">School</label>
                                                        <div class="col-sm-6">
                                                            <input type="text" name="school" id="sch" placeholder="" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Status</label>
                                                        <div class="col-sm-6">
                                                            <select class="form-control">
                                                                <option>Graduated</option>
                                                                <option>Graduating</option>
                                                                <option>Enrolled</option>
                                                                <option>Deferred</option>
                                                                <option>Transferred</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Completion Date</label>
                                                        <div class="col-sm-6">
                                                            <input type="text" name="date" id="com-date" placeholder="" class="form-control">
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
                        <!-- /.box-body -->

                    </form>
                </div>
                <!-- /.box -->
            </div>
            <!-- /.3rd column-->

            <!-- 4th column-->
            <div class="col-sm-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Employment History </h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form class="form-horizontal">
                        <div class="box-body">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Employment History</label>
                                <div class="col-sm-9">
                                 <textarea class="form-control small-textarea" rows="5" cols="10" >
                                    Full Stack Developer
                                    HackersYou

                                 </textarea>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <button class="btn btn-primary pull-right" type="submit">Edit</button>
                                            <button type="button"  data-toggle="modal" data-target="#delete-device" class="btn btn-primary pull-right margin-r-5">Delete</button>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <div class="box box-solid">
                                <div class="box-header with-border">
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <div class="box-group" id="accordion1">
                                        <div class="panel box box-primary">
                                            <div class="box-header with-border">
                                                <h4 class="box-title">
                                                    <a data-toggle="collapse" data-parent="#accordion1" href="#collapseOne1">
                                                        <button class="btn btn-primary" type="submit">Add Employment</button>
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseOne1" class="panel-collapse collapse">
                                                <div class="box-body">
                                                    <form class="form-horizontal">
                                                        <div class="box-body">
                                                            <div class="form-group">
                                                                <label class="col-sm-3 control-label">Job Category </label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" value="Jane" class="form-control" disabled>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-3 control-label">Company Name</label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" value="Jane@email.com" class="form-control" disabled>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-3 control-label">Province</label>
                                                                <div class="col-sm-9">
                                                                    <select class="form-control">
                                                                        <option>Ontario</option>
                                                                        <option>Alberta</option>
                                                                        <option>New Brunswick</option>
                                                                        <option>Manitoba</option>
                                                                        <option>Prince Edward Island</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-3 control-label">Experience Description</label>
                                                                <div class="col-sm-9">
                                                                    <textarea class="form-control" ></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- /.box-body -->
                                                        <div class="box-footer">
                                                            <button class="btn btn-primary pull-right" type="submit">Add</button>
                                                        </div>
                                                        <!-- /.box-footer -->
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- /.box-footer -->
                    </form>
                </div>
                <!-- /.box -->
            </div>
            <!-- /.4th column-->

        </section>
    </div>

    <!-- /.content -->
</div>

<?php include_once "../Shared/footer.php"; ?>
