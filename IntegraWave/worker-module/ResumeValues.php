<?php

$title = "calculator";
$selectedOption = "worker-module,Workers";

require_once "../Private/functions.php";

include_once "../Shared/header.php";

include_once "../Shared/left-navigation.php";

$requestStatus;
if(isset($_POST['action'])) {
    $action = $_POST['action'];

    $requestStatus = requestOperation("resumeCategory", $_POST);

}

?>

    <div class="wrapper">
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Resume Information
                    <small>Enter your Information</small>
                </h1>
            </section>
            <!-- Main content -->
            <section class="content">
                <form class="form-horizontal" method="POST">
                    <?php
                    $response = getData('resumeCategory', '1');
                    var_dump($_POST);

                    foreach ($response['resumeCategory'] as $resumeCategory) {
                        echo "<div class=\"col-sm-12\">
                        <input type='hidden' name='resumeCategory' value='1'/>
                        <div class=\"box\">
                            <div class=\"box-header with-border\">
                                <h3 class=\"box-title\">$resumeCategory[name]</h3>
                                <div class=\"box-tools pull-right\">
                                    <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i>
                                    </button>
                                </div>
                            </div>";

                            foreach ($resumeField['name'] as $resumeField) {
                                echo "<div class=\"box-body\">
                                        <div class=\"form-group\">
                                            <label class=\"col-sm-3 control-label\">$resumeField[name]</label>
                                            <div class=\"col-sm-9\">
                                          </div>
                                </div>
                            </div>";
                            }


                        echo "</div>
                            </div>";
                    }

                    ?>
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