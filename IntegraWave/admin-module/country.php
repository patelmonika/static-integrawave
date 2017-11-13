<?php

$title = "Country";

require_once "../Private/functions.php";

include_once "../Shared/header.php";

include_once "../Shared/left-navigation.php";

$requestStatus;

if(isset($_POST['add'])){
    $controller = "country";
    $data = array('name' => $_POST['name']);
    insertData($controller, $data);
}

if(isset($_POST['delete'])){
    $controller = "country";
    $param = $_POST['id'];
    deleteData($controller,$param);
}

if(isset($_POST['name']) == "edit"){
    $controller = "country";
    $param = $_POST['id'];
    getData($controller,$param);
}

if(isset($_POST['name']) == "update"){
    $controller = "country";
    $param = $_POST['id'];
    $data = array('name' => $_POST['name']);
    updateData($controller, $param, $data);
}

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Cover Letter Wizard
            <small>Customize your Cover letter</small>
        </h1>
        <ol class="breadcrumb">
            <li> </li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Your Page Content Here -->

        <!-- left column -->
        <div class="col-sm-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Country </h3>
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
                            <input type="hidden" id="hidId" name="id" value=<?php if(isset($requestStatus['id'])) echo $requestStatus['id']; ?> >
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Country</label>
                                <div class="col-sm-9">
                                    <input type="text" name="name" id="txtName" placeholder="Add New Country" class="form-control"
                                        value='<?php if(isset($requestStatus['name'])) echo $requestStatus['name'];?>'>
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                            <button class="btn btn-primary pull-right" type="submit"
                                    name='<?php if(isset($requestStatus['id'])){echo 'update';}else{ echo 'add';} ?>'>Add</button>
                            <button class="btn btn-link btn-grey pull-right" type="submit">Cancel</button>
                        </div>
                        <table id="cat1" class="table table-bordered table-striped table-responsive">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Country</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php

                            require_once "../Private/functions.php";

                            $response = getAll("country");

                            if(count($response)>0) {
                                foreach ($response as $key => $value) {
                                    $returnResponse = $returnResponse . "<tr>";
                                    $returnResponse = $returnResponse . "<td name='id'>" . $value['id'] . "</td>";
                                    $returnResponse = $returnResponse . "<td>" . $value['name'] . "</td>";
                                    $returnResponse = $returnResponse . "<td>";
                                    $returnResponse = $returnResponse . "<button type='submit' data-met-id=" . $value['id'] . " name='edit' onclick='setRequestParam(this);'>Edit</button>";
                                    $returnResponse = $returnResponse . " / <button type='button' data-toggle='modal' data-target='#delete' data-met-id=" . $value['id'] . " onclick='setIdOnDelete(this);'>Delete</button>";
                                    $returnResponse = $returnResponse . "</td></tr>";
                                }
                            }

                            echo $returnResponse;

                            ?>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </form>

                <form class="form-horizontal" method="POST">
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
                                    <button type="submit" class="btn btn-primary" data-dismiss="modal" name="delete">OK</button>
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

<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include_once "footer.php"; ?>