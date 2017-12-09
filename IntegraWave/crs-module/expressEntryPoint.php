<?php

$title = "calculator";
$selectedOption = "CRS Calculator";

require_once "../Private/functions.php";
include_once "../Shared/header.php";
include_once "../Shared/left-navigation.php";

?>

<div class="wrapper">
    <div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <?php echo $selectedOption ?>
            </h1>
            <span>Calculate Express Entry Points</span>
        </section>

        <!-- Main content -->
        <section class="content">
            <form class="form-horizontal">
                <div class="col-sm-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">485</h3>
                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </section>
    </div>
    <!-- /.content -->
</div>

<?php include_once "../Shared/footer.php"; ?>