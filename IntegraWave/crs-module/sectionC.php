<?php
/**
 * Copyright (c) 2018. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
 * Morbi non lorem porttitor neque feugiat blandit. Ut vitae ipsum eget quam lacinia accumsan.
 * Etiam sed turpis ac ipsum condimentum fringilla. Maecenas magna.
 * Proin dapibus sapien vel ante. Aliquam erat volutpat. Pellentesque sagittis ligula eget metus.
 * Vestibulum commodo. Ut rhoncus gravida arcu.
 */

$title = "Spouse Details";
$selectedOption = "CRS,Calculator";

require_once "../Private/functions.php";

include_once "../Shared/header.php";

include_once "../Shared/left-navigation.php";

$pointsArray = getAll('option');
//print_r($pointsArray);

//echo $pointsArray[0]['value'];

$points = $_POST['points'];
$married = $_POST['married'];

if(isset($_POST['action'])) {
    $action = $_POST['action'];
    $marriedCondition = "points_with_spouse";
}
//$points = "430";
?>

?>

<div class="wrapper">
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Section C
                <small>Calculate Express Entry Points</small>
            </h1>
            h4>
            <?php
            if ($married == 1) {
                echo "Married profile";
            } else {
                echo "Single profile";
            }
            ?>
            </h4>
            <h4>
                <?php
                if ($points == "") {
                    echo "Calculate your points below.";
                } else {
                    echo "You have " . $points;
                }
                ?>
            </h4>
        </section>
        <!-- Main content -->
        <section class="content">
            <form class="form-horizontal">
                <?php
                $response = getData('section', '3');

                foreach ($response['factor'] as $factor) {
                    echo "<div class=\"col-sm-12\">
                        <div class=\"box\">
                            <div class=\"box-header with-border\">
                                <h3 class=\"box-title\">$factor[name]</h3>
                                <div class=\"box-tools pull-right\">
                                    <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i>
                                    </button>
                                </div>
                            </div>";
                    foreach ($factor['subfactor'] as $subfactor) {
                        foreach ($subfactor['group'] as $group) {
                            echo "<div class=\"box-body\">
                                        <div class=\"form-group\">
                                            <label class=\"col-sm-3 control-label\">$group[name]</label>
                                            <div class=\"col-sm-9\">
                                                <select class=\"form-control\" data-met-addOption=\"$group[id]\" onChange=\"showDescription(this)\" required>";
                            //echo "$group[name]</br>";
                            foreach ($group['option'] as $option) {
                                echo "<option value=\"$option[id]\" data-met-groupId=\"$group[id]\" data-met-desc=\"$option[description]\">$option[name]</option>";
                                //echo "$option[id] - $option[name]</br>";
                            }

                            echo "</select>
                                        <label id=\"lblDesc_$group[id]\" style='display: none;' class='col-sm-12'>Description label</label>
                                    </div>
                                </div>
                            </div>";
                        }
                    }

                    echo "</div>
                            </div>";
                }

                ?>
                <div class="row">
                    <div class="col-sm-12">
                        <button type="submit" class="btn btn-primary pull-right" type="submit">Submit</button>
                        <button type="reset" class="btn btn-link btn-grey pull-right" onclick="hideDescriptionLabel();">Cancel</button>
                    </div>
                </div>

            </form>
        </section>
    </div>
    <!-- /.content -->
</div>

<?php include_once "../Shared/footer.php"; ?>