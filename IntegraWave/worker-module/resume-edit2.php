
<?php

$title = "Resume Wizard";
$selectedOption = "Worker,Resume,Customize Resume";

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
                               Resume Wizard
                               <small>Customize your Resume</small>
                           </h1>
                       <ol class="breadcrumb">
                               <li><a href="resume-print.php">
                                               <button class="btn btn-primary pull-right" type="submit">Print Resume</button></a> </li>
                           </ol>
                   </section>
               <!-- Main content -->
               <section class="content">
                       <!-- Your Page Content Here -->
                       <?php
                           $response = getData('resumeCategory', '1');
                           echo  "<div class=\"col-sm-12\"> 
                <div class=\"box\">
                <div class=\"box-header with-border\">
                        <h3 class=\"box-title\">$resumeCategory[name] </h3>
                        <div class=\"box-tools pull-right\">
                            <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i>
                            </button>
                        </div>
                    </div> ";
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
