<?php

$title = "calculator";
$selectedOption = "CRS,Calculator";

require_once "../Private/functions.php";

include_once "../Shared/header.php";

include_once "../Shared/left-navigation.php";

$requestStatus;
if(isset($_POST['action'])) {
    $action = $_POST['action'];

    $requestStatus = getAll("country");
}

?>

    <div class="wrapper">
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Calculator
                    <small>Calculate Express Entry Points</small>
                </h1>
            </section>
            <!-- Main content -->
            <section class="content">

                    <?php
                    $response = getAll('resumecategory');

                    foreach ($response as $cat) {
                      echo  $cat[name];
                        }
foreach ($resumecategory['resumeField'] as $r) {
                        echo $r['name'];
}

                    ?>



            </section>
        </div>
        <!-- /.content -->
    </div>

<?php include_once "../Shared/footer.php"; ?>