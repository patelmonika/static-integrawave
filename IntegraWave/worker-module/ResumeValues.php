<?php

$title = "Edit Resume";
$selectedOption = "Workers,Resume";

require_once "../Private/functions.php";

include_once "../Shared/header.php";

include_once "../Shared/left-navigation.php";

$requestStatus;
if(isset($_POST['action'])) {
    $action = $_POST['action'];

    $requestStatus = requestOperation("resumecategory", $_POST);
}

?>

    <div class="wrapper">
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Resume
                    <small>Enter your information below</small>
                </h1>
            </section>
            <!-- Main content -->
            <section class="content">
                <form class="form-horizontal" method="POST">

                    <?php
                    $catresponse=getAll('resumecategory');
                    $i=1;
foreach($catresponse as $category) {
    echo "  <div class=\"col-sm-12\">
                        <div class=\"box\">
                            <div class=\"box-header with-border\">
                                <h3 class=\"box-title\">$category[name]</h3>
                                <div class=\"box-tools pull-right\">
                                    <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i>
                                    </button>
                                </div>
                            </div>";

    $response = getData('resumecategory',$i);
    foreach ($response['resume_field'] as $field) {
 echo "<div class=\"box-body\">
                                        <div class=\"form-group\">
                                            <label class=\"col-sm-3 control-label\">$field[name]</label>
                                            <div class=\"col-sm-9\">";


                                echo "<input type=\"text\" class=\"form-control\">";
                                //echo "$option[id] - $option[name]</br>";


                            echo "
                                    </div>
                                </div>
                            </div>";

                        }


                    echo "</div>
                            </div>";
    $i++;
                }

                    ?>

                    <div class="row">
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-primary pull-right" name="action" value="add">Submit</button>
                            <button type="reset" class="btn btn-link btn-grey pull-right" onclick="hideDescriptionLabel();">Cancel</button>
                        </div>
                    </div>
                    </div>
                </form>
            </section>
        </div>
        <!-- /.content -->
    </div>

<?php include_once "../Shared/footer.php"; ?>