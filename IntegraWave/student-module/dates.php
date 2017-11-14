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
    <div class="fc-widget-content">
        <section class="content-header">
            <h1 style="color: whitesmoke">
                Important Dates
                <small>Deadlines and Schedule</small>
            </h1>
        </section>
        <!-- Main content -->
        <section class="content">
            <!-- Your Page Content Here -->

                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#basic" aria-expanded="true">Schedule</a></li>
                        <li><a data-toggle="tab" href="#security" aria-expanded="false">FeesDue</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="basic" class="tab-pane active">
                            <form class="form-horizontal">
                                <div class="box-body">

                                    <table id="schedule" class="table table-bordered table-striped table-responsive">
                                        <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Course</th>
                                            <th>Location</th>
                                            <th>Day</th>
                                            <th>Start Time</th>
                                            <th>End Time</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>PHP</td>
                                            <td>J678</td>
                                            <td>Tuesday</td>
                                            <td>10:00:00</td>
                                            <td>13:30:00</td>
                                            <td>
                                                <a href="#" data-toggle="modal" data-target="#edit-feesdate">Edit</a>/
                                                <a href="#" data-toggle="modal" data-target="#delete">Delete</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>ASP</td>
                                            <td>J124</td>
                                            <td>Monday</td>
                                            <td>08:00:00</td>
                                            <td>11:30:00</td>
                                            <td>
                                                <a href="#" data-toggle="modal" data-target="#edit-feesdate">Edit</a>/
                                                <a href="#" data-toggle="modal" data-target="#delete" data-met-error="">Delete</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Java</td>
                                            <td>J124</td>
                                            <td>Monday</td>
                                            <td>15:00:00</td>
                                            <td>18:30:00</td>
                                            <td>
                                                <a href="#" data-toggle="modal" data-target="#edit-feesdate">Edit</a>/
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
                                                    <option>PHP 1</option>
                                                    <option>ASP 2</option>
                                                    <option>Project Management</option>
                                                    <option>JAVA</option>
                                                    <option>C#</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Location</label>
                                            <div class="col-sm-6">
                                                <input type="text" name="location" id="location" placeholder="Add New Location Here" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Day Of Week</label>
                                            <div class="col-sm-6">
                                                <input type="text" name="day" id="day" placeholder="Add Location Here" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Start Time</label>
                                            <div class="col-sm-6">
                                                <input type="text" name="stime" id="stime" placeholder="Add Start Time Here" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">End Time</label>
                                            <div class="col-sm-6">
                                                <input type="text" name="etime" id="etime" placeholder="Add End Time Here" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Start Date</label>
                                            <div class="col-sm-6">
                                                <input type="text" name="sdate" id="sdate" placeholder="Add Start Date Here" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">End Date</label>
                                            <div class="col-sm-6">
                                                <input type="text" name="edate" id="edate" placeholder="Add End Date Here" class="form-control">
                                            </div>
                                        </div>


                                    </div>
                                    <div class="box-footer">
                                        <button class="btn btn-primary pull-right" type="submit">Add</button>
                                        <button class="btn btn-link btn-grey pull-right" type="submit">Cancel</button>
                                    </div>
                                </div>



                                <div id="edit-feesdate" class="modal fade" role="dialog">
                                    <div class="modal-dialog">
                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title">Edit Schedule</h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label">Location</label>
                                                    <div class="col-sm-6">
                                                        <input type="text" name="location1" id="location1" value="A234" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label">Start Time</label>
                                                    <div class="col-sm-6">
                                                        <input type="text" name="start" id="start" value="00:00:00" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label">End Time</label>
                                                    <div class="col-sm-6">
                                                        <input type="text" name="end" id="end" value="00:00:00" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label">Start Date</label>
                                                    <div class="col-sm-6">
                                                        <input type="text" name="sdate1" id="sdate1" value="01/01/2017" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label">End Date</label>
                                                    <div class="col-sm-6">
                                                        <input type="text" name="edate1" id="edate1" value="31/01/2017" class="form-control">
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
                        <!-- /.tab-pane -->
                        <div id="security" class="tab-pane">
                            <form class="form-horizontal">
                                <div class="box-body">

                                    <table id="fees" class="table table-bordered table-striped table-responsive">
                                        <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Semester</th>
                                            <th>Amount</th>
                                            <th>Due Date</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Sem1</td>
                                            <td>$7000</td>
                                            <td>31/08/2016</td>
                                            <td>Paid</td>
                                            <td>
                                                <a href="#" data-toggle="modal" data-target="#edit-fees">Edit</a>/
                                                <a href="#" data-toggle="modal" data-target="#delete">Delete</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Sem2</td>
                                            <td>$8000</td>
                                            <td>31/08/2017</td>
                                            <td>UnPaid</td>
                                            <td>
                                                <a href="#" data-toggle="modal" data-target="#edit-fees">Edit</a>/
                                                <a href="#" data-toggle="modal" data-target="#delete" data-met-error="">Delete</a>
                                            </td>
                                        </tr>
                                        <tr><td>3</td>
                                            <td>Sem3</td>
                                            <td>$9000</td>
                                            <td>01/03/2018</td>
                                            <td>UnPaid</td>
                                            <td>
                                                <a href="#" data-toggle="modal" data-target="#edit-fees">Edit</a>/
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
                                            <label class="col-sm-3 control-label">Amount</label>
                                            <div class="col-sm-6">
                                                <input type="text" name="amount" id="amount" placeholder="Add Amount Here" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Due Date</label>
                                            <div class="col-sm-6">
                                                <input type="text" name="date" id="date" placeholder="Add Due Date Here" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Status</label>
                                            <div class="col-sm-6">
                                                <input type="text" name="status" id="status" placeholder="Add Status Here" class="form-control">
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
                                <div id="edit-fees" class="modal fade" role="dialog">
                                    <div class="modal-dialog">
                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title">Edit Schedule</h4>
                                            </div>
                                            <div class="modal-body">

                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label">Amount</label>
                                                    <div class="col-sm-6">
                                                        <input type="text" name="amt" id="amt" value="1000" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label">Due Date</label>
                                                    <div class="col-sm-6">
                                                        <input type="text" name="due" id="due" value="01/01/2018" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label">Status</label>
                                                    <div class="col-sm-6">
                                                        <input type="status1" name="end" id="status1" value="Paid" class="form-control">
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
                        <!-- /.tab-pane -->
                        <div id="users" class="tab-pane">
                            <table id="example1" class="table table-bordered table-striped table-responsive">
                                <thead>
                                <tr>
                                    <th>Username</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>davidcampbell</td>
                                    <td>David</td>
                                    <td>Campbell</td>
                                    <td>davidcampbell@ato.com</td>
                                    <td><a href="#" data-toggle="modal" data-target="#delete-user">Delete</a></td>
                                </tr>
                                <tr>
                                    <td>johnsmith</td>
                                    <td>John</td>
                                    <td>Smith</td>
                                    <td>johnsmith@ato.com</td>
                                    <td><a href="#" data-toggle="modal" data-target="#delete-user">Delete</a></td>
                                </tr>

                            </table>
                        </div>

                    <!-- /.tab-content -->
                </div>
                <!-- /.nav-tabs-custom -->
            </div>
            <!-- Modal -->
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

<?php include_once "../Shared/footer.php"; ?>
