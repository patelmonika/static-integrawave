<?php

$title = "Resume Wizard";
$selectedOption = "Worker,Resume,Print Resume";

require_once "../Private/functions.php";

include_once "../Shared/header.php";

include_once "../Shared/left-navigation.php";
?>

    <style>
        .resume-container {
            background-color: gray;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .resume-page {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            border: 2px solid dimgray;
            background-color: whitesmoke;
        }

        .name {
            color: red;
        }

    </style>

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
            <div class="resume-container">
                <!--TYPE THE ACTUAL CODE FOR TRADITIONAL RESUME HERE -->

                <article class="resume-page">

                    <section class="title">
                        <h1 class="candidate-name">
                            <span class="name">Monika Patel</span>
                        </h1>
                        <h2 class="address-street">
                            <span class="address-number">205</span>
                            <span class="address-street">Humber College Blv</span> -
                            <span class="address-complement">Basement</span>
                        </h2>
                        <h2 class="address-location">
                            <span class="address-city">Toronto</span>,
                            <span class="address-state">Ontario</span>
                        </h2>
                        <h2 class="phone">987-987-5432</h2>
                        <h2 class="email">mo@ni.ca</h2>
                    </section>

                    <section class="summary">
                        <h2 class="summary-section-title">Summary</h2>
                        <p class="summary-text">
                            It is a long established fact that a reader will be distracted by the readable content of a
                            page when looking at its layout. The point of using Lorem Ipsum is that it has a
                            more-or-less normal distribution of letters, as opposed to using 'Content here, content
                            here', making it look like readable English. Many desktop publishing packages and web page
                            editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will
                            uncover many web sites still in their infancy. Various versions have evolved over the years,
                            sometimes by accident, sometimes on purpose (injected humour and the like).
                        </p>
                    </section>

                    <section class="education">
                        <h2 class="education-section-title">Education</h2>

                        <h1 class="education-title">
                            <span class="education-institution">Humber College</span> -
                            <span class="education-credential-name">Post Grad in Software Development</span> -
                            <span class="education-credential-location">Toronto</span>
                        </h1>

                        <h2 class="education-subtitle">
                            <span class="education-type">Diploma</span>
                            <span class="education-status">Graduated</span>
                        </h2>

                        <p class="education-description">
                            There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered alteration in some form, by injected humour, or randomised words which don't look
                            even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be
                            sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum
                            generators on the Internet tend to repeat predefined chunks as necessary, making this the
                            first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined
                            with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.
                            The generated Lorem Ipsum is therefore always free from repetition, injected humour, or
                            non-characteristic words etc.
                        </p>

                    </section>

                </article>

                <!--TYPE THE ACTUAL CODE FOR TRADITIONAL RESUME HERE-->
            </div>
        </section>
        <!-- /.content -->
    </div>

    <!-- /.content -->

<?php include_once "../Shared/footer.php"; ?>