<?php

$title = "Resume Wizard";
$selectedOption = "Worker,Resume,Print Resume";

require_once "../Private/functions.php";

include_once "../Shared/header.php";

include_once "../Shared/left-navigation.php";
include 'PdfWriter.php';
require __DIR__ . '/../vendor/autoload.php';
$response = getData('worker', 1);

if (isset($_POST['action'])) {

    $workerFields = array();
    foreach ($response['resume_fields'] as $field) {
        $workerFields[$field["name"]] = $field["pivot"]["value"];
    }
    $str = "<html>
<head>
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
</style>
</head>
<body>
<div class=\"resume-container\">
    <article class=\"resume-page\">
        <section class=\"title\">
            <h1 class=\"candidate-name name\">
                ".  $workerFields['name'] ."
            </h1>

            <div class=\"address\">
                <h3 class=\"address subtitle name\">
                                <span class=\"address-number\">".$workerFields['address']."</span>
                </h3>
                <h3 class=\"address-location subtitle name\">
                                <span class=\"address-city\">".$workerFields['city']."</span>,
                    <span class=\"address-state\"></span>
                </h3>
                <h3 class=\"phone subtitle name\">".$workerFields['phone']."</h3>
                <h3 class=\"email subtitle name\">".$workerFields['email']."</h3>

            </div>
        </section>

        <section class=\"summary\">
            <h2 class=\"summary-section-title category\">Summary</h2>
            <p class=\"summary-text description\">
                ".$workerFields['address']."
            </p>
        </section>

        <section class=\"education\">
            <h2 class=\"education-section-title category\">Education</h2>

            <h1 class=\"education-title subtitle\">
                <span class=\"education-institution\">".$workerFields['Institute']."</span>
            </h1>

            <h2 class=\"education-subtitle subtitle\">
                <span class=\"education-type\">".$workerFields['Education Level']."</span>
                <span class=\"education-status\">".$workerFields['Current Status']."</span>
            </h2>
        </section>

        <section class=\"employment\">
            <h2 class=\"employment-section-title category\">Employment History</h2>

            <h1 class=\"employment-title subtitle\">
                <span class=\"emlployment-institution\">".$workerFields['Company Name']."</span>
                <span class=\"education-credential-location\">".$workerFields['city']."</span>
            </h1>

            <h2 class=\"employment-subtitle subtitle\">
                <span class=\"employment-type\">".$workerFields['Job Type']."</span>
            </h2>

            <p class=\"employment-description description\">
                ".$workerFields['Description']."
            </p>
            <br>

            <h1 class=\"employment-title subtitle\">
                <span class=\"emlployment-institution\">  </span>
                <span class=\"education-credential-location\"></span>
            </h1>

            <h2 class=\"employment-subtitle subtitle\">
                <span class=\"employment-type\"></span>
            </h2>

            <p class=\"employment-description description\">

            </p>
        </section>

        <section class=\"hobby\">
            <h2 class=\"skill-section-title category\">Hobbies and Interests</h2>
            <p class=\"hobby-description description\">
                ".$workerFields['Hobbies Description']."
            </p>
        </section>

        <section class=\"skill\">
            <h2 class=\"skill-section-title category\">Professional Skills</h2>
            <ul class=\"description\">
                <li>".$workerFields['Skills Description']."</li>
                <li></li>
            </ul>
        </section>
    </article>
</div></body>
</html>";

    $pdfWriter = new PDFWriter();
    $outputFilePath = $pdfWriter->write($str);
}

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
                        <p>
                        <form method="post">
                            <input type="submit" name="action" value="download" />Download Resume
                        </form>
                        </p>
                    </div>
                </div>
            </div>
            <!-- ./col -->
        </div>

        <?php include "template_models/TemplateTraditional.php"; ?>

        <!-- /.row -->
<!--        <div class="resume-container">-->
<!--            <article class="resume-page">-->
<!--                --><?php
//                $workerFields = array();
//                foreach ($response['resume_fields'] as $field) {
//                    $workerFields[$field["name"]] = $field["pivot"]["value"];
//                }
//
//                ?>
<!--                <section class="title">-->
<!--                    <h1 class="candidate-name name">-->
<!--                        --><?php
//                        echo $workerFields["name"];
//                        ?>
<!--                    </h1>-->
<!---->
<!--                    <div class="address">-->
<!--                        <h3 class="address subtitle name">-->
<!--                                <span class="address-number"> --><?php
//                                    echo $workerFields["address"];
//                                    ?><!--</span>-->
<!--                        </h3>-->
<!--                        <h3 class="address-location subtitle name">-->
<!--                                <span class="address-city">--><?php
//                                    echo $workerFields["city"];
//                                    ?><!--</span>,-->
<!--                            <span class="address-state">--><?php
//                                echo $workerFields["country"];
//                                ?><!--</span>-->
<!--                        </h3>-->
<!--                        <h3 class="phone subtitle name">--><?php
//                            echo $workerFields["phone"];
//                            ?><!--</h3>-->
<!--                        <h3 class="email subtitle name">--><?php
//                            echo $workerFields["email"];
//                            ?><!--</h3>-->
<!---->
<!--                    </div>-->
<!--                </section>-->
<!---->
<!--                <section class="summary">-->
<!--                    <h2 class="summary-section-title category">Summary</h2>-->
<!--                    <p class="summary-text description">-->
<!--                        --><?php
//                        echo $workerFields["address"];
//                        ?>
<!--                    </p>-->
<!--                </section>-->
<!---->
<!--                <section class="education">-->
<!--                    <h2 class="education-section-title category">Education</h2>-->
<!---->
<!--                    <h1 class="education-title subtitle">-->
<!--                            <span class="education-institution">--><?php
//                                echo $workerFields["Institute"];
//                                ?><!--</span>-->
<!--                    </h1>-->
<!---->
<!--                    <h2 class="education-subtitle subtitle">-->
<!--                            <span class="education-type">--><?php
//                                echo $workerFields["Education Level"];
//                                ?><!--</span>-->
<!--                        <span class="education-status">--><?php
//                            echo $workerFields["Current Status"];
//                            ?><!--</span>-->
<!--                    </h2>-->
<!---->
<!--                </section>-->
<!---->
<!--                <section class="employment">-->
<!--                    <h2 class="employment-section-title category">Employment History</h2>-->
<!---->
<!--                    <h1 class="employment-title subtitle">-->
<!--                            <span class="emlployment-institution"> --><?php
//                                echo $workerFields["Company Name"];
//                                ?><!--</span>-->
<!--                        <span class="education-credential-location">--><?php
//                            echo $workerFields["city"];
//                            ?><!--</span>-->
<!--                    </h1>-->
<!---->
<!--                    <h2 class="employment-subtitle subtitle">-->
<!--                            <span class="employment-type">--><?php
//                                echo $workerFields["Job Type"];
//                                ?><!--</span>-->
<!--                    </h2>-->
<!---->
<!--                    <p class="employment-description description">-->
<!--                        --><?php
//                        echo $workerFields["Description"];
//                        ?>
<!--                    </p>-->
<!--                    <br>-->
<!---->
<!--                    <h1 class="employment-title subtitle">-->
<!--                        <span class="emlployment-institution">  </span>-->
<!--                        <span class="education-credential-location"></span>-->
<!--                    </h1>-->
<!---->
<!--                    <h2 class="employment-subtitle subtitle">-->
<!--                        <span class="employment-type"></span>-->
<!--                    </h2>-->
<!---->
<!--                    <p class="employment-description description">-->
<!---->
<!--                    </p>-->
<!---->
<!--                </section>-->
<!---->
<!--                <section class="hobby">-->
<!--                    <h2 class="skill-section-title category">Hobbies and Interests</h2>-->
<!--                    <p class="hobby-description description">-->
<!--                        --><?php
//                        echo $workerFields["Hobbies Description"];
//                        ?>
<!--                    </p>-->
<!---->
<!--                </section>-->
<!---->
<!--                <section class="skill">-->
<!--                    <h2 class="skill-section-title category">Professional Skills</h2>-->
<!---->
<!--                    <ul class="description">-->
<!--                        <li> --><?php
//                            echo $workerFields["Skills Description"];
//                            ?><!--</li>-->
<!--                        <li</li>-->
<!--                    </ul>-->
<!---->
<!--                </section>-->
<!---->
<!--            </article>-->
<!--        </div>-->
    </section>
</div>
<?php
include_once "../Shared/footer.php";
?>
