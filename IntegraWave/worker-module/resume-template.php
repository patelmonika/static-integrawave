<?php

$title = "Resume Wizard";
$selectedOption = "Worker,Resume,Templates";

require_once "../Private/functions.php";

include_once "../Shared/header.php";

include_once "../Shared/left-navigation.php";

?>



    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Resume Wizard
                <small>Select your template</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-mobile"></i>Devices</a></li>
                <li class="active">Device Details </li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <!-- Your Page Content Here -->
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-4 col-xs-6 ">
                    <!-- small box -->
                    <div class="small-box bg-blue">
                        <div class="inner">
                            <img itemprop="image" alt="A sample template of a Traditional resume" src="./resume-templates/traditional resume.png" class="tmpl_preview">
                        </div>
                        <a href="resume-edit.php" class="small-box-footer">Traditional Resume <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-4 col-xs-6 ">
                    <!-- small box -->
                    <div class="small-box bg-blue">
                        <div class="inner">
                            <img itemprop="image" alt="A sample template of a Traditional resume" src="./resume-templates/left justified.png" class="tmpl_preview">
                        </div>
                        <a href="resume-edit.php" class="small-box-footer">Left Justified <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-4 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-blue">
                        <div class="inner">
                            <img itemprop="image" alt="A sample template of a Traditional resume" src="./resume-templates/heavy.png" class="tmpl_preview">
                        </div>
                        <a href="resume-edit.php" class="small-box-footer">Heavy <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-4 col-xs-6 ">
                    <!-- small box -->
                    <div class="small-box bg-blue">
                        <div class="inner">
                            <img itemprop="image" alt="A sample template of a Traditional resume" src="./resume-templates/letter block.png" class="tmpl_preview">
                        </div>
                        <a href="resume-edit.php" class="small-box-footer">Letter Block <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-xs-6 ">
                    <!-- small box -->
                    <div class="small-box bg-blue">
                        <div class="inner">
                            <img itemprop="image" alt="A sample template of a Traditional resume" src="./resume-templates/apple green.png" class="tmpl_preview">
                        </div>
                        <a href="resume-edit.php" class="small-box-footer ">Apple Green <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <!-- ./col -->
            </div>
            <!-- /.row -->

            <!-- Modal -->

        </section>
        <!-- /.content -->
    </div>

    <!-- /.content -->

<!-- /.content-wrapper -->
<!-- Main Footer -->

<?php include_once "../Shared/footer.php"; ?>


