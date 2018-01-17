<?php
/**
 * Copyright (c) 2018. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
 * Morbi non lorem porttitor neque feugiat blandit. Ut vitae ipsum eget quam lacinia accumsan.
 * Etiam sed turpis ac ipsum condimentum fringilla. Maecenas magna.
 * Proin dapibus sapien vel ante. Aliquam erat volutpat. Pellentesque sagittis ligula eget metus.
 * Vestibulum commodo. Ut rhoncus gravida arcu.
 */

$title = "CRS Results";
$selectedOption = "CRS,Calculator";

require_once "../Private/functions.php";

include_once "../Shared/header.php";

include_once "../Shared/left-navigation.php";

$pointsArray = getAll('option');
//print_r($pointsArray);

//echo $pointsArray[0]['value'];

$married = $_POST['married'];

if(isset($_POST['action'])) {
    $action = $_POST['action'];

    if($married){
        $marriedCondition = "points_with_spouse";
    } else{
        $marriedCondition = "points_without_spouse";
    }

    if ($action == "sectiond") {
        $points = $_POST['points'];
        $points += $pointsArray[ $_POST['group_25'] - 1 ][$marriedCondition];
        $points += $pointsArray[ $_POST['group_26'] - 1 ][$marriedCondition];
        $points += $pointsArray[ $_POST['group_27'] - 1 ][$marriedCondition];
        $points += $pointsArray[ $_POST['group_28'] - 1 ][$marriedCondition];
        $points += $pointsArray[ $_POST['group_29'] - 1 ][$marriedCondition];
    }

}
?>

?>

<div class="wrapper">
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Results
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
            <h3>
                <?php
                if ($points == "") {
                    echo "Calculate your points below.";
                } else {
                    echo "You have " . $points;
                }
                ?>
            </h3>
        </section>
    </div>
    <!-- /.content -->
</div>

<?php include_once "../Shared/footer.php"; ?>