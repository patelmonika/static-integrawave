<?php

$title = "Resume Wizard";
$selectedOption = "Worker,Resume,Print Resume";

require_once "../Private/functions.php";

include_once "../Shared/header.php";

include_once "../Shared/left-navigation.php";
?>

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Resume Wizard
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-mobile"></i>Devices</a></li>
                <li class="active">Devices List</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <!-- Your Page Content Here -->
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner small-box-footer">
                            <a href="resume-edit.php"><p style="color: #fff">Edit Resume</p></a>
                        </div>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner small-box-footer">
                            <p>Proof Read</p>
                        </div>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner small-box-footer">
                            <p>Share</p>
                        </div>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner small-box-footer">
                            <p>Download Resume</p>
                        </div>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->
            <div class="row">
                <!--TYPE THE ACTUAL CODE FOR TRADITIONAL RESUME HERE -->

                <article>

                    <section class="title">
                        <h1 class="title"></h1>
                        <h2 class="address"></h2>
                        <h2 class="phone"></h2>
                        <h2 class="email"></h2>
                    </section>

                    <section class="summary">
                        <p class="summary-text"></p>
                    </section>

                    <section class="education">
                        <h1 class="education"></h1>
                        <h2 class="degree"></h2>
                        <p class="education-description"></p>
                    </section>

                </article>

                <!--TYPE THE ACTUAL CODE FOR TRADITIONAL RESUME HERE-->
            </div>
        </section>
        <!-- /.content -->
    </div>

    <!-- /.content -->

<?php include_once "../Shared/footer.php"; ?>