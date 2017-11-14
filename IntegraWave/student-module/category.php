<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Integra Wave | Dashboard</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css"/>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css"/>
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css"/>
    <!-- Custom style -->
    <link rel="stylesheet" href="../dist/css/custom.css"/>
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/skin-black.css"/>
    <!-- bootstrap datepicker -->
    <link rel="stylesheet" href="../plugins/datepicker/datepicker3.css"/>
    <!-- Bootstrap time Picker -->
    <link rel="stylesheet" href="../plugins/timepicker/bootstrap-timepicker.min.css"/>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition skin-black sidebar-mini">
<div class="wrapper">

            <!-- general form elements -->
    <div class="col-sm-12">
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
            <!-- /.box -->
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
                                        <input type="text" name="activity2" id="activity2" placeholder="Add New weighting Here" class="form-control">
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
        </div>

    </div>
    </div>
<!-- ./wrapper -->
<!-- REQUIRED JS SCRIPTS -->
<!-- jQuery 2.2.3 -->
<script src="../plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../bootstrap/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/app.min.js"></script>
<!-- Optionally, you can add Slimscroll and FastClick plugins.
   Both of these plugins are recommended to enhance the
   user experience. Slimscroll is required when using the
   fixed layout. -->
<script src="../plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- bootstrap time picker -->
<script src="../plugins/timepicker/bootstrap-timepicker.min.js"></script>
<script>
    $(function () {

        //Date picker
        $('#datepicker1,#datepicker2').datepicker({
            autoclose: true
        });

    });
</script>
</body>
</html>