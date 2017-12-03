<?php

$title = "Courses";
$selectedOption = "";

require_once "../Private/functions.php";

include_once "../Shared/header.php";

include_once "../Shared/left-navigation.php";


?>

<div class="wrapper">
    <!-- Content Wrapper. Contains page content -->
    <!-- Content Header (Page header) -->
    <div class="content-wrapper">
        <div class="fc-widget-content">
            <section class="content-header">
                <h1 style="color: black">
                   Courses
                    <small>Grades</small>
                </h1>
            </section>
            <!-- Main content -->
            <div class="col-md-12">
                <form class="box-body" action="semesters.php">
                    <div class="form-group">
                    <label>Select Semester</label>
                    <select class="form-control">
                        <option>Semester 1----(Fall 2016)</option>
                        <option>Semester 2----(Winter 2016)</option>
                        <option>Semester 3----(Fall 2017)</option>
                        <option>Semester 4----(Winter 2017)</option>
                    </select>

                    </div>
                    <div class="form-group">
                    <button type="submit" class="btn btn-default" name="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>

<?php include_once "../Shared/footer.php"; ?>
