<?php

$title = "Resume Wizard";
$selectedOption = "Worker,Resume,Print Resume";

require_once "../Private/functions.php";

include_once "../Shared/header.php";

include_once "../Shared/left-navigation.php";
$response=getData('worker',1);
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
            padding: 40px;
            border: 2px solid dimgray;
            background-color: whitesmoke;
        }

        .subtitle{

            margin-top: 2px;
            margin-bottom: 2px;
            font-size: 20px;

        }

        .name{
            text-align: center;
        }

        .candidate-name {
            font-weight: bold;
            text-transform: capitalize;
            color: black;
            text-align: center;
        }

        .category{
            font-weight: bold;
        }

        .description{
            text-align: justify;
        }


        /*    .address *,
            .contact * {
                margin: 5px 10px;
                font-size: 14px;
                color: #3e3e3e;
                text-align: center;
                text-transform: capitalize;
            }
            .address-number {
                margin-right: 0;
            }
            .address-street, .address-city {
                margin-left: 0;
                margin-right: 5px;
            }
            .address-complement, .address-state {
                margin-left: 5px;
            }

            .education-title {
                width: 90%;
                margin-left: auto;
                font-size: 16px;
                display: flex;
                justify-content: space-between;
                border-bottom: 1px solid lightgray;
            }



             */



    </style>

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Resume Wizard
            </h1>

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
                <?php
                /*$str = file_get_contents('resume-print.json');
                $json = json_decode($str, true);
                echo '<pre>' . print_r($json, true) . '</pre>';
                */?>

                <article class="resume-page">

                    <section class="title">
                        <h1 class="candidate-name name">
                          <?php
var_dump($response[0]);


                          ?>

<p>Second block</p>
                          <?php
                          foreach ($response['pivot'] as $name){
                              foreach($name as $key => $vale){
                              if($key[resume_field_id] == 1){
                                  echo $key[value];

                              }
                              }


                          }
                          ?>

                        </h1>

                        <div class="address">
                            <h3 class="address subtitle name">
                                <span class="address-number">205</span>
                                <span class="address-street">Humber College Blv</span> -
                                <span class="address-complement">Basement</span>
                            </h3>
                            <h3 class="address-location subtitle name">
                                <span class="address-city">Toronto</span>,
                                <span class="address-state">Ontario</span>
                            </h3>
                            <h3 class="phone subtitle name">987-987-5432</h3>
                            <h3 class="email subtitle name">mo@ni.ca</h3>

                        </div>
                    </section>

                    <section class="summary">
                        <h2 class="summary-section-title category">Summary</h2>
                        <p class="summary-text description">
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
                        <h2 class="education-section-title category">Education</h2>

                        <h1 class="education-title subtitle">
                            <span class="education-institution">Humber College</span>
                            <span class="education-credential-name">Post Grad in Software Development</span>
                            <span class="education-credential-location">Toronto</span>
                        </h1>

                        <h2 class="education-subtitle subtitle">
                            <span class="education-type">Diploma</span>
                            <span class="education-status">Graduated</span>
                        </h2>

                        <p class="education-description description">
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

                    <section class="employment">
                        <h2 class="employment-section-title category">Employment History</h2>

                        <h1 class="employment-title subtitle">
                            <span class="emlployment-institution"> Shopify </span>
                            <span class="education-credential-location">Toronto</span>
                        </h1>

                        <h2 class="employment-subtitle subtitle">
                            <span class="employment-type">Web Developer</span>
                        </h2>

                        <p class="employment-description description">
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
                        <br>

                        <h1 class="employment-title subtitle">
                            <span class="emlployment-institution"> TCS </span>
                            <span class="education-credential-location">Toronto</span>
                        </h1>

                        <h2 class="employment-subtitle subtitle">
                            <span class="employment-type">Web Developer</span>
                        </h2>

                        <p class="employment-description description">
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

                    <section class="hobby">
                        <h2 class="skill-section-title category">Hobbies and Interests</h2>
                        <p class="hobby-description description">
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

                    <section class="skill">
                        <h2 class="skill-section-title category">Professional Skills</h2>

                        <ul class="description">
                            <li> Programming Languages:	Java, C#, HTML, JavaScript, XML, SCSS, PHP, Android . Proficient in writing code,
                                testing, debugging, and documentation</li>
                            <li>Troubleshooting: Able to research and implement technical solutions to hardware and software problems</li>
                        </ul>

                    </section>

                </article>

                <!--TYPE THE ACTUAL CODE FOR TRADITIONAL RESUME HERE-->
            </div>
        </section>
        <!-- /.content -->
    </div>

    <!-- /.content -->

<?php include_once "../Shared/footer.php"; ?>