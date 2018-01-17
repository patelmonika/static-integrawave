<?php

$title = "category";
$selectedOption = "";

require_once "../Private/functions.php";

include_once "../Shared/header.php";

include_once "../Shared/left-navigation.php";

$studentId = "";
$userId="";
if(isset($_SESSION['email'])){
    $userId = $_SESSION['userId'];
}

$requestStatus;
if(isset($_POST['action'])) {
    $action = $_POST['action'];

    $requestStatus = requestOperation("course", $_POST);
}
$resSem;
if(isset($_POST['action'])) {
    $action = $_POST['action'];

    $resSem = requestOperation("semester", $_POST);
}
$resCat;
if(isset($_POST['action'])) {
    $action = $_POST['action'];

    $resCat = requestOperation("category", $_POST);
}




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

                    <div class="box-body">
                        <form class="form-horizontal" method="post">
                            <input type="hidden" id="semhidId" name="semid"
                                   value='<?php if(isset($resSem['id'])) echo $resSem['id']; ?>' >
                        <div class="box-body">

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Semester</label>
                                <div class="col-sm-6">
                                    <input type="text" name="semester" id="semester" placeholder="Add New Semester Here" class="form-control" value='<?php if(isset($resSem['name'])) echo $resSem['name'];?>'>
                                </div>
                            </div>
                        </div>
                            <input type="hidden" name="student_id" value='<?php echo $userId; ?>' />
                            <div class="box-footer">
                                <button class="btn btn-primary pull-right" type="submit"
                                        value='<?php echo isset($resSem['id']) ? 'update' : 'add' ?>' name="action">
                                    <?php echo isset($resSem['id']) ? 'Update' : 'Add' ?></button>
                                <?php echo isset($resSem['id']) ?
                                    "<button class='btn btn-link btn-grey pull-right' type='submit' name='reset'>Cancel</button>" :
                                    "<button class='btn btn-link btn-grey pull-right' type='reset'>Cancel</button>" ?>

                            </div>
                        </form>
                    </div>

                    <table id="example2" class="table table-bordered table-striped table-responsive">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php

                        $response = getAll("semester");
                        $returnResponse = "";

                        if(count($response)>0) {
                            foreach ($response as $key => $value) {
                                $returnResponse = $returnResponse . "<tr>";
                                $returnResponse = $returnResponse . "<td name='id'>" . $value['id'] . "</td>";
                                $returnResponse = $returnResponse . "<td>" . $value['name'] . "</td>";
                                $returnResponse = $returnResponse . "<td>";
                                $returnResponse = $returnResponse . "<a href='#' data-met-name='edit' data-met-id=" . $value['id'] . " name='edit' onclick='setRequestParam(this);'>Edit</a> / ";
                                $returnResponse = $returnResponse . "<a href='#' data-toggle='modal' data-target='#delete' data-met-id=" . $value['id'] . " onclick='setIdOnDelete(this);'>Delete</a>";
                                $returnResponse = $returnResponse . "</td></tr>";
                            }
                        }

                        echo $returnResponse;

                        ?>
                    </table>


                                <!-- Modal -->
                                <form class="form-horizontal" method="POST">
                                    <div id="delete" class="modal fade" role="dialog">
                                        <div class="modal-dialog">
                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Delete Country</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Are you sure you want to delete it?</p>
                                                </div>
                                                <input type="hidden" id="hidElementId" name="id"/>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-link btn-grey" data-dismiss="modal">Cancel</button>
                                                    <button type="submit" class="btn btn-primary" name="action" value="delete">OK</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>




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

                    <div class="box-body">

                        <div class="box-body">
                            <form class="form-horizontal" method="post">
                                <input type="hidden" id="hidId" name="id"
                                       value='<?php if(isset($requestStatus['id'])) echo $requestStatus['id']; ?>' >
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Select Semester</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="semester_id">
                                            <option value="">Select</option>
                                            <?php
                                            $responseOption="";
                                            $semesters = getAll("semester");
                                            foreach ($semesters as $responseArray){
                                                $responseOption = $responseOption . "<option value='$responseArray[id]'>$responseArray[name]</option>";
                                            }

                                            echo $responseOption;
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Course</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="name" id="course" placeholder="Add New Course Here" class="form-control" value='<?php if(isset($requestStatus['name'])) echo $requestStatus['name'];?>'>
                                    </div>
                                </div>
                                <input type="hidden" name="student_id" value='<?php echo $userId; ?>' />
                            </div>
                            <div class="box-footer">
                                <button class="btn btn-primary pull-right" type="submit"
                                        value='<?php echo isset($requestStatus['id']) ? 'update' : 'add' ?>' name="action">
                                    <?php echo isset($requestStatus['id']) ? 'Update' : 'Add' ?></button>
                                <?php echo isset($requestStatus['id']) ?
                                    "<button class='btn btn-link btn-grey pull-right' type='submit' name='reset'>Cancel</button>" :
                                    "<button class='btn btn-link btn-grey pull-right' type='reset'>Cancel</button>" ?>

                            </div>
                        </form>

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
                            <?php

                            $response = getAll("course");
                            $responseSemester = getAll("semester");
                            $returnResponse = "";
                            $returnResponseSemester = "";

                            if(count($response)>0) {
                                foreach ($response as $key => $value) {
                                    foreach ($responseSemester as $key => $valueSemester) {
                                        if ($value['semester_id'] == $valueSemester['id']) {
                                            $returnResponseSemester =$valueSemester['name'] ;
                                        }
                                    }
                                    $returnResponse = $returnResponse . "<tr>";
                                    $returnResponse = $returnResponse . "<td name='id'>" . $value['id'] . "</td>";
                                    $returnResponse = $returnResponse . "<td>" . $value['name'] . "</td>";
                                    $returnResponse = $returnResponse . "<td>" . $returnResponseSemester . "</td>";
//                                    $returnResponse = $returnResponse . "<td>" . $value['semester_id'] . "</td>";
                                    $returnResponse = $returnResponse . "<td>";
                                    $returnResponse = $returnResponse . "<a href='#' data-met-name='edit' data-met-id=" . $value['id'] . " name='edit' onclick='setRequestParam(this);'>Edit</a> / ";
                                    $returnResponse = $returnResponse . "<a href='#' data-toggle='modal' data-target='#delete' data-met-id=" . $value['id'] . " onclick='setIdOnDelete(this);'>Delete</a>";
                                    $returnResponse = $returnResponse . "</td></tr>";
                                }
                            }

                            echo $returnResponse;

                            ?>
                        </table>
                        <!-- Modal -->
                        <form class="form-horizontal" method="POST">
                            <div id="delete" class="modal fade" role="dialog">
                                <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Delete it</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p>Are you sure you want to delete it?</p>
                                        </div>
                                        <input type="hidden" id="hidElementId" name="id"/>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-link btn-grey" data-dismiss="modal">Cancel</button>
                                            <button type="submit" class="btn btn-primary" name="action" value="delete">OK</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

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

                    <div class="box-body">

                    <div class="box-body">
                        <form class="form-horizontal">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Select Semester</label>
                            <div class="col-sm-9">
                                <select class="form-control">
                                    <?php
                                    $responseOption="";
                                    $semesters = getAll("semester");
                                    foreach ($semesters as $responseArray){
                                        $responseOption = $responseOption . "<option value='$responseArray[id]'>$responseArray[name]</option>";
                                    }

                                    echo $responseOption;
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Select Course</label>
                            <div class="col-sm-9">
                                <select class="form-control">
                                    <?php
                                    $responseOption="";
                                    $course = getAll("course");
                                    foreach ($course as $responseArray){
                                        $responseOption = $responseOption . "<option value='$responseArray[id]'>$responseArray[name]</option>";
                                    }

                                    echo $responseOption;
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Category</label>
                            <div class="col-sm-9">
                                <input type="text" name="category" id="category" placeholder="Add New Category Here" class="form-control" value='<?php if(isset($resCat['name'])) echo $resCat['name'];?>'>
                            </div>
                        </div>

                        <div class="box-footer">
                            <button class="btn btn-primary pull-right" type="submit"
                                    value='<?php echo isset($res['id']) ? 'update' : 'add' ?>' name="action">
                                <?php echo isset($requestStatus['id']) ? 'Update' : 'Add' ?></button>
                            <?php echo isset($requestStatus['id']) ?
                                "<button class='btn btn-link btn-grey pull-right' type='submit' name='reset'>Cancel</button>" :
                                "<button class='btn btn-link btn-grey pull-right' type='reset'>Cancel</button>" ?>

                        </div>
                        </form>
                    </div>
                    <table id="categories" class="table table-bordered table-striped table-responsive">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php

                        $response = getAll("category");
                        $returnResponse = "";

                        if(count($response)>0) {
                            foreach ($response as $key => $value) {
                                $returnResponse = $returnResponse . "<tr>";
                                $returnResponse = $returnResponse . "<td name='id'>" . $value['id'] . "</td>";
                                $returnResponse = $returnResponse . "<td>" . $value['name'] . "</td>";
                                $returnResponse = $returnResponse . "<td>";
                                $returnResponse = $returnResponse . "<a href='#' data-met-name='edit' data-met-id=" . $value['id'] . " name='edit' onclick='setRequestParam(this);'>Edit</a> / ";
                                $returnResponse = $returnResponse . "<a href='#' data-toggle='modal' data-target='#delete' data-met-id=" . $value['id'] . " onclick='setIdOnDelete(this);'>Delete</a>";
                                $returnResponse = $returnResponse . "</td></tr>";
                            }
                        }

                        echo $returnResponse;

                        ?>
                    </table>

                    </div>
                    <div id="edit-category" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-body">
                                    <form class="form-horizontal" method="post">
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
                                <div class="box-footer">
                                    <button class="btn btn-primary pull-right" type="submit"
                                            value='<?php echo isset($resCat['id']) ? 'update' : 'add' ?>' name="action">
                                        <?php echo isset($resCat['id']) ? 'Update' : 'Add' ?></button>
                                    <?php echo isset($resCat['id']) ?
                                        "<button class='btn btn-link btn-grey pull-right' type='submit' name='reset'>Cancel</button>" :
                                        "<button class='btn btn-link btn-grey pull-right' type='reset'>Cancel</button>" ?>

                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </form>
                    </div>
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