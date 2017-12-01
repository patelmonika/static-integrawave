<?php

$title = "Cover Letter Wizard";
$selectedOption = "Worker,Cover Letter,Customize Cover Letter";

require_once "../Private/functions.php";

include_once "../Shared/header.php";

include_once "../Shared/left-navigation.php";
?>

<div class="wrapper">
    <!-- Main Header -->

    <!-- Left side column. contains the logo and sidebar -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Cover Letter Wizard
                <small>Customize your Cover letter</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="cover-letter-print.php">
                    <button class="btn btn-primary pull-right" type="submit">Print Cover Letter</button></a> </li>
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
                                <label class="col-sm-3 control-label">Education</label>
                                <div class="col-sm-9">
                                 <textarea class="form-control small-textarea" rows="5" cols="10" >
                                    Post Graduation
                                    Humber college
                                    Graduating : October 2017
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
                                    <div class="box-group" id="accordion">
                                        <div class="panel box box-primary">
                                            <div class="box-header with-border">
                                                <h4 class="box-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                                        <button class="btn btn-primary" type="submit">Add Education</button>
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseOne" class="panel-collapse collapse">
                                                <div class="box-body">
                                                    <form class="form-horizontal">
                                                        <div class="box-body">
                                                            <div class="form-group">

                                                                <div class="col-sm-9">
                                                                    <input type="text" placeholder="High School, Degree and Major" class="form-control" disabled>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="col-sm-9">
                                                                    <input type="text" placeholder="School" class="form-control" disabled>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="col-sm-9">
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
                                                                <div class="col-sm-9">
                                                                    <input type="text" placeholder="Location" class="form-control" disabled>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="col-sm-9">
                                                                    <input type="text" placeholder="Completion Date" class="form-control" disabled>
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
                                    Graduating : October 2017
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
<!-- /.content-wrapper -->
<!-- Main Footer -->
<?php include_once "../Shared/footer.php"; ?>
