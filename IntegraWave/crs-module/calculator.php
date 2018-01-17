<?php

$title = "calculator";
$selectedOption = "CRS,Calculator";

require_once "../Private/functions.php";

include_once "../Shared/header.php";

include_once "../Shared/left-navigation.php";

$requestStatus;
$married = $_POST['married'];
$points = 0;
$pointsArray = getAll('option');
//print_r($pointsArray);

//echo $pointsArray[0]['value'];

if(isset($_POST['action'])) {
    $action = $_POST['action'];


}
//$points = "430";
?>

<div class="wrapper">
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Calculator
                <small>Calculate Express Entry Points</small>
            </h1>
            <h4>
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
            <form class="form-horizontal" method="POST" action=" <?php echo $married? 'spouseDetails.php' : 'sectionC.php'?> ">
<!--                <input type="hidden" value="--><?php //$married = $_POST['married']; ?><!--">-->
                <?php
                $response = getData('section', '1');

                foreach ($response['factor'] as $factor) {
                    echo "<div class=\"col-sm-12\">
                        <input type='hidden' name='scenario' value='1'/>
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
//                            IF ONE OF THE LANGUAGUE SKILLS
                            if($group[id] == "4" || $group[id] == "5" || $group[id] == "6" || $group[id] == "7") {
//                                CHECK IF ITS ENGLISH OR FRENCH

                                    echo "<div class=\"box-body\">
                                            <div class=\"form-group\">
                                                <label class=\"col-sm-3 control-label\">ENGLISH - $group[name]</label>
                                                <div class=\"col-sm-9\">
                                                    <select class=\"form-control\" data-met-addOption=\"$group[id]\" onChange=\"showDescription(this)\" name=\"group_$group[id]\" required>";

                                } else if($group[id] == "8" || $group[id] == "9" || $group[id] == "10" || $group[id] == "11") {
                                    echo "<div class=\"box-body\">
                                            <div class=\"form-group\">
                                                <label class=\"col-sm-3 control-label\">FRENCH - $group[name]</label>
                                                <div class=\"col-sm-9\">
                                                    <select class=\"form-control\" data-met-addOption=\"$group[id]\" onChange=\"showDescription(this)\" name=\"group_$group[id]\" required>";
                                }
//                                    IF NOT READING LIST WRI OR SPEA
                            else {
                                echo "<div class=\"box-body\">
                                        <div class=\"form-group\">
                                            <label class=\"col-sm-3 control-label\">$group[name]</label>
                                            <div class=\"col-sm-9\">
                                                <select class=\"form-control\" data-met-addOption=\"$group[id]\" onChange=\"showDescription(this)\" name=\"group_$group[id]\" required>";
                            }

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
                        <button type="submit" class="btn btn-primary pull-right" name="action">Submit</button>
                        <button type="reset" class="btn btn-link btn-grey pull-right" onclick="hideDescriptionLabel();">Cancel</button>
                        <input type="hidden" name="married" value="<?php echo $married; ?>" />
                        <input type="hidden" name="action" value="calculate" />
                    </div>
                </div>

            </form>
        </section>
    </div>
    <!-- /.content -->
</div>

<?php include_once "../Shared/footer.php"; ?>