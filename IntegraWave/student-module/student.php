<?php

$title = "category";
$selectedOption = "";

require_once "../Private/functions.php";

include_once "../Shared/header.php";

include_once "../Shared/left-navigation.php";
?>



<div class="wrapper">

    <div class="content-wrapper">
    <div class="row">
        <!-- left column -->
        <div class="col-md-6">
            <!-- general form elements -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Semester</h3>
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
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>Semester1</td>
                                <td>
                                    <a href="#" data-toggle="modal" data-target="#edit-semester">Edit</a>/
                                    <a href="#" data-toggle="modal" data-target="#delete">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Semester2</td>
                                <td>
                                    <a href="#" data-toggle="modal" data-target="#edit-semester">Edit</a>/
                                    <a href="#" data-toggle="modal" data-target="#delete" data-met-error="">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Semester3</td>
                                <td>
                                    <a href="#" data-toggle="modal" data-target="#edit-semester">Edit</a>/
                                    <a href="#" data-toggle="modal" data-target="#delete">Delete</a>
                                </td>
                            </tr>
                        </table>

                        <div class="box-body">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Semester</label>
                                <div class="col-sm-6">
                                    <input type="text" name="semester" id="semester" placeholder="Add New Semester Here" class="form-control">
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
                    <div id="edit-semester" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Edit Semester</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Semester</label>
                                        <div class="col-sm-6">
                                                <input type="text" name="semester1" id="semester1" value="Semester1" class="form-control">
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
            <!-- /.box -->
            <div class="box box-warning">
                <div class="box-header with-border">
                    <h3 class="box-title">Courses</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                    </div>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal">
                    <div class="box-body">
                        <table id="courseTable" class="table table-bordered table-striped table-responsive">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Semester</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>PHP</td>
                                <td>Semester2</td>
                                <td>
                                    <a href="#" data-toggle="modal" data-target="#edit-course">Edit</a>/
                                    <a href="#" data-toggle="modal" data-target="#delete">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>ASP</td>
                                <td>Semester2</td>
                                <td>
                                    <a href="#" data-toggle="modal" data-target="#edit-course">Edit</a>/
                                    <a href="#" data-toggle="modal" data-target="#delete">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Project Management</td>
                                <td>Semester1</td>
                                <td>
                                    <a href="#" data-toggle="modal" data-target="#edit-course">Edit</a>/
                                    <a href="#" data-toggle="modal" data-target="#delete">Delete</a>
                                </td>
                            </tr>
                        </table>
                        <div class="box-body">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Select Semester</label>
                                <div class="col-sm-9">
                                    <select class="form-control">
                                        <option>Sem 1</option>
                                        <option>Sem 2</option>
                                        <option>Sem 3</option>
                                        <option>Sem 4</option>
                                        <option>Sem 5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Course</label>
                                <div class="col-sm-9">
                                    <input type="text" name="course" id="sem" placeholder="Add New Course Here" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                            <button class="btn btn-primary pull-right" type="submit">Add</button>
                            <button class="btn btn-link btn-grey pull-right" type="submit">Cancel</button>
                        </div>

                        <div class="box-body">
                    </div>
                    </div>
                    <div id="edit-course" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Edit Course</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Semester</label>
                                        <div class="col-sm-6">
                                            <input type="text" name="course" id="course" value="Course1" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Course</label>
                                        <div class="col-sm-6">
                                            <input type="text" name="course" id="csem" value="Semester1" class="form-control">
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
                </form>
            </div>
            <!-- /.box -->
        </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Category</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                    </div>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal">
                    <div class="box-body">
                    <table id="categories" class="table table-bordered table-striped table-responsive">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>PHP</td>
                            <td>
                                <a href="#" data-toggle="modal" data-target="#edit-category">Edit</a>/
                                <a href="#" data-toggle="modal" data-target="#delete">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>ASP</td>
                            <td>
                                <a href="#" data-toggle="modal" data-target="#edit-category">Edit</a>/
                                <a href="#" data-toggle="modal" data-target="#delete">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Project Management</td>
                            <td>
                                <a href="#" data-toggle="modal" data-target="#edit-category">Edit</a>/
                                <a href="#" data-toggle="modal" data-target="#delete">Delete</a>
                            </td>
                        </tr>
                    </table>
                    <div class="box-body">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Select Semester</label>
                            <div class="col-sm-9">
                                <select class="form-control">
                                    <option>Sem 1</option>
                                    <option>Sem 2</option>
                                    <option>Sem 3</option>
                                    <option>Sem 4</option>
                                    <option>Sem 5</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Select Course</label>
                            <div class="col-sm-9">
                                <select class="form-control">
                                    <option>PHP</option>
                                    <option>ASP</option>
                                    <option>project Management</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Category</label>
                            <div class="col-sm-9">
                                <input type="text" name="category" id="category" placeholder="Add New Category Here" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button class="btn btn-primary pull-right" type="submit">Add</button>
                        <button class="btn btn-link btn-grey pull-right" type="submit">Cancel</button>
                    </div>
                    </div>
                    <div id="edit-category" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Edit Categoryr</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Semester</label>
                                        <div class="col-sm-6">
                                            <input type="text" name="ccsem" id="ccsem" value="Course1" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Course</label>
                                        <div class="col-sm-6">
                                            <input type="text" name="ccourse" id="ccourse" value="Semester1" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Category</label>
                                        <div class="col-sm-6">
                                            <input type="text" name="course" id="ccategory" value="Category1" class="form-control">
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
                </form>
            </div>

            <!-- /.box -->
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Weighting</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                    </div>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal">
                    <div class="box-body">
                    <table id="weighting" class="table table-bordered table-striped table-responsive">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Course</th>
                            <th>Category</th>
                            <th>Activity</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>PHP</td>
                            <td>Lab</td>
                            <td>Lab1</td>
                            <td>
                                <a href="#" data-toggle="modal" data-target="#edit-weight">Edit</a>/
                                <a href="#" data-toggle="modal" data-target="#delete">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>ASP</td>
                            <td>Quiz</td>
                            <td>Quiz1</td>
                            <td>
                                <a href="#" data-toggle="modal" data-target="#edit-weight">Edit</a>/
                                <a href="#" data-toggle="modal" data-target="#delete">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Project Management</td>
                            <td>Lab</td>
                            <td>Lab2</td>
                            <td>
                                <a href="#" data-toggle="modal" data-target="#edit-weight">Edit</a>/
                                <a href="#" data-toggle="modal" data-target="#delete">Delete</a>
                            </td>
                        </tr>
                    </table>
                    <div class="box-body">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Select Course</label>
                            <div class="col-sm-9">
                                <select class="form-control">
                                    <option>Course 1</option>
                                    <option>Course 2</option>
                                    <option>Course 3</option>
                                    <option>Course 4</option>
                                    <option>Course 5</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Select Category</label>
                            <div class="col-sm-9">
                                <select class="form-control">
                                    <option>Lab</option>
                                    <option>Quiz</option>
                                    <option>Class Activity</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Weighting</label>
                            <div class="col-sm-9">
                                <input type="text" name="weight" id="weight" placeholder="Add New weighting Here" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button class="btn btn-primary pull-right" type="submit">Add</button>
                        <button class="btn btn-link btn-grey pull-right" type="submit">Cancel</button>
                    </div>

                    </div>
                    <div id="edit-weight" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Edit Weight</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Course</label>
                                        <div class="col-sm-6">
                                            <input type="text" name="wcourse" id="wcourse" value="Course1" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Category</label>
                                        <div class="col-sm-6">
                                            <input type="text" name="wcourse" id="wcategory" value="Category1" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Activity</label>
                                        <div class="col-sm-6">
                                            <input type="text" name="wcourse" id="wactivity" value="Lab1" class="form-control">
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
                </form>
            </div>
            <!-- /.box -->
        </div>
        <!-- Default to the left -->
    </div>
</div>
</div>
<!-- ./wrapper -->

<?php include_once "../Shared/footer.php"; ?>