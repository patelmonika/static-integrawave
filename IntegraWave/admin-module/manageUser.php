<?php

$title = "Manage User";
$selectedOption = "Admin,Manage User";

require_once "../Private/functions.php";

include_once "../Shared/header.php";

include_once "../Shared/left-navigation.php";

$requestStatus;
if(isset($_POST['action'])) {
    $action = $_POST['action'];

    $requestStatus = requestOperation("user", $_POST);
}

?>
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Manage User
                <small>User Details</small>
            </h1>
            <ol class="breadcrumb">
                <li> </li>
            </ol>
        </section>
        <section class="content">
            <div class="col-sm-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Users </h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="box-body">
                        <form class="form-horizontal" method="POST">
                            <div class="box-body">
                                <input type="hidden" id="hidId" name="id"
                                       value='<?php if(isset($requestStatus['id'])) echo $requestStatus['id']; ?>' >
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">User Role</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="role_id" required <?php echo isset($requestStatus['id']) ? '' : 'disabled' ?> >
                                            <option value="">Select</option>
                                            <?php
                                            $selectedValueId = null;
                                            if(isset($requestStatus['id'])){$selectedValueId = $requestStatus['role_id'];}

                                            $roles = getAll("role");
                                            $responseOption = "";

                                            if(is_null($selectedValueId)) {
                                                foreach ($roles as $responseArray){
                                                    $responseOption = $responseOption . "<option value='$responseArray[id]'>$responseArray[name]</option>";
                                                }
                                            }
                                            else{
                                                foreach ($roles as $responseArray) {
                                                    if($responseArray[id] == $selectedValueId) {
                                                        $responseOption = $responseOption . "<option value='$responseArray[id]' selected>$responseArray[name]</option>";
                                                    }
                                                    else{
                                                        $responseOption = $responseOption . "<option value='$responseArray[id]'>$responseArray[name]</option>";
                                                    }
                                                }
                                            }

                                            echo $responseOption;

                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="box-footer">
                                <button class="btn btn-primary pull-right" type="submit" value='update' name="action"
                                    <?php echo isset($requestStatus['id']) ? '' : 'disabled' ?>>Update</button>
                                <?php echo isset($requestStatus['id']) ?
                                    "<button class='btn btn-link btn-grey pull-right' type='submit' name='reset'>Cancel</button>" :
                                    "<button class='btn btn-link btn-grey pull-right' type='reset'>Cancel</button>" ?>

                            </div>
                        </form>
                        <table id="tblDisplay" class="table table-bordered table-striped table-responsive">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Role ID</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php

                            $response = getAll("user");
                            $returnResponse = "";

                            if(count($response)>0) {
                                foreach ($response as $key => $value) {
                                    $returnResponse = $returnResponse . "<tr>";
                                    $returnResponse = $returnResponse . "<td name='id'>" . $value['id'] . "</td>";
                                    $returnResponse = $returnResponse . "<td>" . $value['name'] . "</td>";
                                    $returnResponse = $returnResponse . "<td>" . $value['role_id'] . "</td>";
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

                    <!-- Modal -->
                    <form class="form-horizontal" method="POST">
                        <div id="delete" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Delete User</h4>
                                    </div>
                                    <div class="modal-body">
                                        <p>Are you sure you want to delete this User?</p>
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
                <!-- /.box -->
            </div>

        </section>
    </div>

<?php include_once "../Shared/footer.php"; ?>