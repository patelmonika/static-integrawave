<?php

$title = "DashBoard";
$selectedOption = "Home";

require_once "../Private/functions.php";

include_once "../Shared/header.php";

include_once "../Shared/left-navigation.php";
?>


<div class="wrapper">
    <!-- Main Header -->

    <div class="wrapper">
        <!-- Main Header -->

        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Dashboard
                    <small>Integra wave</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-mobile"></i>Dashboard</a></li>
                </ol>
            </section>
            <!-- Main content -->
            <section class="content">
                <div class="image-container">
                    <img src="../dist/img/logo.png" alt="Image: Integrawave logo">
                </div>
                <h1 class="content-title">Welcome to the Immigrant's Helper</h1>
                <!--                <img src="../../dist/img/integra-logo-transparency.png" alt="Image: Integrawave logo">-->
                <p class="content-text">
                    Our application is mainly focused on the needs of people building their pathway to Canada. Our
                    solution helps both newcomers and candidates to permanent residency to evaluate their profile for
                    the job market, handle their day-to-day life as international students, or evaluate immigration
                    purposes under the Express Entry system. We target the most common types of users interested in our
                    offer: the ones looking for information about Canada immigration, the ones planning to study in
                    Canada, and the ones already working
                    in the country.
                </p>
                <hr>
                <div class="icons">
                    <div class="icon">
                        <i class="fa fa-mouse-pointer"></i>
                        <span class="icon-text">
                            Interactive and ready to be used over the internet.
                        </span>

                    </div>

                    <div class="icon">
                        <i class="fa fa-archive"></i>
                        <span class="icon-text">
                            Keep a record of all your progress and academic history.
                        </span>

                    </div>

                    <div class="icon">
                        <i class="fa fa-balance-scale"></i>
                        <span class="icon-text">
                            Information to balance your academic and work life.
                        </span>

                    </div>

                    <div class="icon">
                        <i class="fa fa-bed"></i>
                        <span class="icon-text">
                            Reduce your stress knowing your deadlines and grades.
                        </span>

                    </div>

                    <div class="icon">
                        <i class="fa fa-calendar"></i>
                        <span class="icon-text">
                            Monitor your assignments and due dates.
                        </span>
                    </div>

                    <div class="icon disabled" title="Not yet! Feature for next major release">
                        <i class="fa fa-bell"></i>
                        <span class="icon-text">
                            Receive notifications on your browser or phone when things change!
                        </span>

                    </div>


                    <div class="icon disabled" title="Not yet! Feature for next major release">
                        <i class="fa fa-commenting"></i>
                        <span class="icon-text">
                            Share information with your peers (and your instructors).
                        </span>
                    </div>

                    <div class="icon">
                        <i class="fa fa-android"></i>
                        <span class="icon-text">
                            For the techies: this apps runs perfectly on Android devices!
                        </span>

                    </div>

                    <div class="icon">
                        <i class="fa fa-apple"></i>
                        <span class="icon-text">
                            For the techies: and it's perfect to run on Safari in any iOS system!
                        </span>

                    </div>

                    <div class="icon">
                        <i class="fa fa-database"></i>
                        <span class="icon-text">
                            For the techies: database-drive application that keeps updated!
                        </span>

                    </div>


                    <div class="icon">
                        <i class="fa fa-hand-spock-o"></i>
                        <span class="icon-text">
                            Best of all, this is a product made by a great team of devs.
                        </span>

                    </div>

                </div>
            </section>
        </div>
    </div>

    <!-- /.content-wrapper -->
    <!-- Main Footer -->

    <?php include_once "../Shared/footer.php"; ?>

