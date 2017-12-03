<?php

$title = "dates";
$selectedOption = "";

require_once "../Private/functions.php";

include_once "../Shared/header.php";

include_once "../Shared/left-navigation.php";
?>



<div class="wrapper">
    <!-- Content Wrapper. Contains page content -->
    <!-- Content Header (Page header) -->
    <div class="content-wrapper">
        <div class="fc-widget-content">
            <section class="content-header">
                <h1 style="color: whitesmoke">
                    Grades
                </h1>
            </section>
            <!-- Main content -->
            <section class="content">
                <!-- Your Page Content Here -->

                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#basic" aria-expanded="true">Course-ASP</a></li>
                        <li><a data-toggle="tab" href="#security" aria-expanded="false">Course-PHP</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="basic" class="tab-pane active">
                            <div class="box">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Lab</h3>
                                    <div class="box-tools pull-right">

                                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                        </button>
                                    </div>
                                </div>
                                <!-- /.box-header -->
                                <!-- form start -->
                                <form class="form-horizontal">
                                    <div class="box-body">

                                        <table id="cat1" class="table table-bordered table-striped table-responsive">
                                            <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Activity</th>
                                                <th>Total Marks</th>
                                                <th>Achieved Marks</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Lab1</td>
                                                <td>20</td>
                                                <td>18</td>
                                                <td>
                                                    <a href="#" data-toggle="modal" data-target="#edit-activity">Edit</a>/
                                                    <a href="#" data-toggle="modal" data-target="#delete">Delete</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Lab2</td>
                                                <td>10</td>
                                                <td>9</td>
                                                <td>
                                                    <a href="#" data-toggle="modal" data-target="#edit-activity">Edit</a>/
                                                    <a href="#" data-toggle="modal" data-target="#delete" data-met-error="">Delete</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Lab3</td>
                                                <td>10</td>
                                                <td>7</td>
                                                <td>
                                                    <a href="#" data-toggle="modal" data-target="#edit-activity">Edit</a>/
                                                    <a href="#" data-toggle="modal" data-target="#delete">Delete</a>
                                                </td>
                                            </tr>
                                        </table>
                                        <div class="box-body">
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Activity</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="activity1" id="activity1" placeholder="Add New Activity Here" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Total Marks</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="course" id="total" placeholder="Add Total Marks Here" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Achieved Marks</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="course" id="achieved" placeholder="Add Achieved Scores Here" class="form-control">
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
                                    <div id="edit-activity" class="modal fade" role="dialog">
                                        <div class="modal-dialog">
                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Activity</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Activity</label>
                                                        <div class="col-sm-6">
                                                            <input type="text" name="activity" id="activity" value="Activity1" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Total Marks</label>
                                                        <div class="col-sm-6">
                                                            <input type="text" name="tmarks" id="tmarks" value="00" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Achieved Marks</label>
                                                        <div class="col-sm-6">
                                                            <input type="text" name="amarks" id="amarks" value="00" class="form-control">
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
                            <div class="box box-warning">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Research</h3>
                                    <div class="box-tools pull-right">
                                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                        </button>
                                    </div>
                                </div>

                                <!-- form start -->
                                <form class="form-horizontal">
                                    <div class="box-body">
                                        <table id="cat2" class="table table-bordered table-striped table-responsive">
                                            <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Activity</th>
                                                <th>Total Marks</th>
                                                <th>Achieved Marks</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Lab1</td>
                                                <td>20</td>
                                                <td>18</td>
                                                <td>
                                                    <a href="#" data-toggle="modal" data-target="#edit-activity">Edit</a>/
                                                    <a href="#" data-toggle="modal" data-target="#delete">Delete</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Lab2</td>
                                                <td>10</td>
                                                <td>9</td>
                                                <td>
                                                    <a href="#" data-toggle="modal" data-target="#edit-activity">Edit</a>/
                                                    <a href="#" data-toggle="modal" data-target="#delete" data-met-error="">Delete</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Lab3</td>
                                                <td>10</td>
                                                <td>7</td>
                                                <td>
                                                    <a href="#" data-toggle="modal" data-target="#edit-activity">Edit</a>/
                                                    <a href="#" data-toggle="modal" data-target="#delete">Delete</a>
                                                </td>
                                            </tr>
                                        </table>
                                        <div class="box-body">

                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Activity</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="activity2" id="activity2" placeholder="Add New Activity Here" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Total Marks</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="totalmarks" id="totalmarks" placeholder="Add Total Marks Here" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Achieved Marks</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="achievedmarks" id="achievedmarks" placeholder="Add Achieved Scores Here" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box-footer">
                                            <button class="btn btn-primary pull-right" type="submit">Add</button>
                                            <button class="btn btn-link btn-grey pull-right" type="submit">Cancel</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                        <!-- /.tab-pane -->
                        <div id="security" class="tab-pane">
                            <div class="box">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Quiz</h3>
                                    <div class="box-tools pull-right">

                                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                        </button>
                                    </div>
                                </div>
                                <!-- /.box-header -->
                                <!-- form start -->
                                <form class="form-horizontal">
                                    <div class="box-body">

                                        <table id="cat1" class="table table-bordered table-striped table-responsive">
                                            <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Activity</th>
                                                <th>Total Marks</th>
                                                <th>Achieved Marks</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Lab1</td>
                                                <td>20</td>
                                                <td>18</td>
                                                <td>
                                                    <a href="#" data-toggle="modal" data-target="#edit-activity">Edit</a>/
                                                    <a href="#" data-toggle="modal" data-target="#delete">Delete</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Lab2</td>
                                                <td>10</td>
                                                <td>9</td>
                                                <td>
                                                    <a href="#" data-toggle="modal" data-target="#edit-activity">Edit</a>/
                                                    <a href="#" data-toggle="modal" data-target="#delete" data-met-error="">Delete</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Lab3</td>
                                                <td>10</td>
                                                <td>7</td>
                                                <td>
                                                    <a href="#" data-toggle="modal" data-target="#edit-activity">Edit</a>/
                                                    <a href="#" data-toggle="modal" data-target="#delete">Delete</a>
                                                </td>
                                            </tr>
                                        </table>
                                        <div class="box-body">
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Activity</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="activity1" id="activity1" placeholder="Add New Activity Here" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Total Marks</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="course" id="total" placeholder="Add Total Marks Here" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Achieved Marks</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="course" id="achieved" placeholder="Add Achieved Scores Here" class="form-control">
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
                                    <div id="edit-activity" class="modal fade" role="dialog">
                                        <div class="modal-dialog">
                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Activity</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Activity</label>
                                                        <div class="col-sm-6">
                                                            <input type="text" name="activity" id="activity" value="Activity1" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Total Marks</label>
                                                        <div class="col-sm-6">
                                                            <input type="text" name="tmarks" id="tmarks" value="00" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Achieved Marks</label>
                                                        <div class="col-sm-6">
                                                            <input type="text" name="amarks" id="amarks" value="00" class="form-control">
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
                            <div class="box box-warning">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Assignment</h3>
                                    <div class="box-tools pull-right">
                                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                        </button>
                                    </div>
                                </div>

                                <!-- form start -->
                                <form class="form-horizontal">
                                    <div class="box-body">
                                        <table id="cat2" class="table table-bordered table-striped table-responsive">
                                            <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Activity</th>
                                                <th>Total Marks</th>
                                                <th>Achieved Marks</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Lab1</td>
                                                <td>20</td>
                                                <td>18</td>
                                                <td>
                                                    <a href="#" data-toggle="modal" data-target="#edit-activity">Edit</a>/
                                                    <a href="#" data-toggle="modal" data-target="#delete">Delete</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Lab2</td>
                                                <td>10</td>
                                                <td>9</td>
                                                <td>
                                                    <a href="#" data-toggle="modal" data-target="#edit-activity">Edit</a>/
                                                    <a href="#" data-toggle="modal" data-target="#delete" data-met-error="">Delete</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Lab3</td>
                                                <td>10</td>
                                                <td>7</td>
                                                <td>
                                                    <a href="#" data-toggle="modal" data-target="#edit-activity">Edit</a>/
                                                    <a href="#" data-toggle="modal" data-target="#delete">Delete</a>
                                                </td>
                                            </tr>
                                        </table>
                                        <div class="box-body">

                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Activity</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="activity2" id="activity2" placeholder="Add New Activity Here" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Total Marks</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="totalmarks" id="totalmarks" placeholder="Add Total Marks Here" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Achieved Marks</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="achievedmarks" id="achievedmarks" placeholder="Add Achieved Scores Here" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box-footer">
                                            <button class="btn btn-primary pull-right" type="submit">Add</button>
                                            <button class="btn btn-link btn-grey pull-right" type="submit">Cancel</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>

                        </div>
                        <!-- Default to the left -->
                        <div class="box box-info">
                            <div class="box-header with-border">
                                <h3 class="box-title">Add New</h3>
                                <div class="box-tools pull-right">
                                    <a href="student.php"><i class="fa fa-plus"></i>
                                    </a>
                                </div>
                            </div>
                            <!-- /.box-header -->
                            <!-- form start -->
                            <form class="form-horizontal">


                            </form>
                        </div>
                        <!-- /.tab-pane -->

                <div id="delete-sem" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Delete Semester</h4>
                            </div>
                            <div class="modal-body">
                                <p>Are you sure you want to delete the semester?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-link btn-grey" data-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="edit-sem" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Edit Semester</h4>
                            </div>
                            <div class="modal-body">
                                <p>Are you sure you want to edit the semester?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-link btn-grey" data-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /.content -->
        </div>
    </div>
</div>

<?php include_once "../Shared/footer.php"; ?>
