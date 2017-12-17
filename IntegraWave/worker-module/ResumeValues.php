<?php

$title = "calculator";
$selectedOption = "CRS,Calculator";

require_once "../Private/functions.php";

include_once "../Shared/header.php";

include_once "../Shared/left-navigation.php";

$requestStatus;
if(isset($_POST['action'])) {
    $action = $_POST['action'];


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
                <form class="form-horizontal" method="POST">
                    <?php
                    $response = getAll('resumecategory');

                    foreach ($response as $cat) {
                        echo "<div class=\"col-sm-12\">
                        <input type='hidden' name='scenario' value='1'/>
                        <div class=\"box\">
                            <div class=\"box-header with-border\">
                                <h3 class=\"box-title\">$cat[name]</h3>
                               
                            </div>
                            </div>
                            
                            </div>
                            ";




                        }

                    ?>
                    <div class="row">
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-primary pull-right" name="submit">Submit</button>
                            <button type="reset" class="btn btn-link btn-grey pull-right">Cancel</button>
                        </div>
                    </div>

                </form>
            </section>
        </div>
        <!-- /.content -->
    </div>

<?php include_once "../Shared/footer.php"; ?>