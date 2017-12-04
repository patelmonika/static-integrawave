<?php

$title = "calculator";
$selectedOption = "CRS,Calculator";

require_once "../Private/functions.php";

include_once "../Shared/header.php";

include_once "../Shared/left-navigation.php";

$requestStatus;
if(isset($_POST['action'])) {
    $action = $_POST['action'];

    $requestStatus = requestOperation("country", $_POST);
}

?>

<div class="wrapper">
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Calculator
                <small>Calculate Express Entry Points</small>
            </h1>
        </section>
        <!-- Main content -->
        <section class="content">
            <form class="form-horizontal" method="POST">
                <div class="col-sm-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Are You Married?</h3>
                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="box-body">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Married</label>
                                <div class="col-sm-9">
                                    <div class="checkbox">
                                        <label>
                                            <input type="radio" name="married" value="1">
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Single</label>
                                <div class="col-sm-9">
                                    <div class="checkbox">
                                        <label>
                                            <input type="radio" name="married" value="0">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <button type="submit" class="btn btn-primary pull-right" name="submit">Submit</button>
                        <button type="reset" class="btn btn-link btn-grey pull-right" onclick="hideDescriptionLabel();">Cancel</button>
                    </div>
                </div>

            </form>
        </section>
    </div>
    <!-- /.content -->
</div>

<?php include_once "../Shared/footer.php"; ?>