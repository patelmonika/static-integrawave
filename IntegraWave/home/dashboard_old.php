<?php

$title = "Dashboard";
$selectedOption = "CRS,Calculator";

require_once "Private/functions.php";

include_once "Shared/header.php";

include_once "Shared/left-navigation.php";

?>
<div class="wrapper">
    <!-- Main Header -->
    <header class="main-header">
        <!-- Logo -->
        <a href="dashboard_old.php" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><img src="../dist/img/logo.jpg" alt="logo"/></span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><img src="./dist/img/logo.jpg" alt="logo"/>Integra Wave</span>
        </a>
        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Messages: style can be found in dropdown.less-->
                    <li class="dropdown messages-menu">
                        <!-- Menu toggle button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-envelope-o"></i>
                            <span class="label label-success">4</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">You have 4 messages</li>
                            <li>
                                <!-- inner menu: contains the messages -->
                                <ul class="menu">
                                    <li>
                                        <!-- start message -->
                                        <a href="#">
                                            <div class="pull-left">
                                                <!-- User Image -->
                                                <img src="../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                                            </div>
                                            <!-- Message title and timestamp -->
                                            <h4>
                                                Support Team
                                                <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                            </h4>
                                            <!-- The message -->
                                            <p>Vehicle arriving in 5 mins</p>
                                        </a>
                                    </li>
                                    <!-- end message -->
                                </ul>
                                <!-- /.menu -->
                            </li>
                            <li class="footer"><a href="#">See All Messages</a></li>
                        </ul>
                    </li>
                    <!-- /.messages-menu -->
                    <!-- Notifications Menu -->
                    <li class="dropdown notifications-menu">
                        <!-- Menu toggle button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-bell-o"></i>
                            <span class="label label-warning">10</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">You have 10 notifications</li>
                            <li>
                                <!-- Inner Menu: contains the notifications -->
                                <ul class="menu">
                                    <li>
                                        <!-- start notification -->
                                        <a href="#">
                                            <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                        </a>
                                    </li>
                                    <!-- end notification -->
                                </ul>
                            </li>
                            <li class="footer"><a href="#">View all</a></li>
                        </ul>
                    </li>
                    <!-- Tasks Menu -->
                    <li class="dropdown tasks-menu">
                        <!-- Menu Toggle Button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-flag-o"></i>
                            <span class="label label-danger">9</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">You have 9 tasks</li>
                            <li>
                                <!-- Inner menu: contains the tasks -->
                                <ul class="menu">
                                    <li>
                                        <!-- Task item -->
                                        <a href="#">
                                            <!-- Task title and progress text -->
                                            <h3>
                                                Track school bus
                                                <small class="pull-right">20%</small>
                                            </h3>
                                            <!-- The progress bar -->
                                            <div class="progress xs">
                                                <!-- Change the css width attribute to simulate progress -->
                                                <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                    <span class="sr-only">20% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end task item -->
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="#">View all tasks</a>
                            </li>
                        </ul>
                    </li>
                    <!-- User Account Menu -->
                    <li class="dropdown user user-menu">
                        <!-- Menu Toggle Button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <!-- The user image in the navbar-->
                            <img src="../dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                            <!-- hidden-xs hides the username on small devices so only the image appears. -->
                            <span class="hidden-xs">Anand Baraskar</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- The user image in the menu -->
                            <li class="user-header">
                                <img src="../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                                <p>
                                    Anand Baraskar - Admin
                                    <small>Active since July 2017</small>
                                </p>
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="profile.html" class="btn btn-secondary">Profile</a>
                                </div>
                                <div class="pull-right">
                                    <a href="logout.html" class="btn btn-primary">Sign out</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar Menu -->
            <ul class="sidebar-menu">
                <!-- Optionally, you can add icons to the links -->
                <li class="active"><a href="index.html"><i class="fa fa-dashboard"></i> <span>Home</span></a></li>
                <li class="treeview">
                    <a href="index.html"><i class="fa fa-graduation-cap"></i> <span>Admin</span>
                        <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="treeview"><a href="../admin-module/country.php">Country</a>

                        </li>

                    </ul>
                </li>
                <li class="treeview">
                    <a href="index.html"><i class="fa fa-graduation-cap"></i> <span>Student</span>
                        <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="treeview"><a href="./StudentModule/category.html">Courses</a>
                            <ul class="treeview-menu">
                        <li><a href="../StudentModule/category.html">ASP</a></li>
                        <li><a href="../StudentModule/category.html">PHP</a></li>
                            </ul>
                        </li>
                        <li class="treeview"><a href="./StudentModule/category.html">Important Dates</a>
                            <ul class="treeview-menu">
                                <li><a href="../StudentModule/dates.html">Schedule</a></li>
                                <li><a href="../StudentModule/dates.html">Fees Deadlines</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="treeview">
                <a href="index.html"><i class="fa fa-briefcase"></i> <span>Workers</span>
                    <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
                </span>
                </a>
                <ul class="treeview-menu">
                    <li class="treeview"><a href="resume.html"><span>Resume</span><span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span> </a>
                        <ul class="treeview-menu">
                            <li><a href="../workerModule/resumeTemplate.html">Templates</a> </li>
                            <li><a href="../workerModule/editResume.html">Customize Resume</a> </li>
                        </ul>
                    </li>
                    <li class="treeview"><a href="resume.html"><span>Cover Letter</span><span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span> </a>
                        <ul class="treeview-menu">
                            <li><a href="../workerModule/cvTemplate.html">Templates</a> </li>
                            <li><a href="../workerModule/editCV.html">Customize Cover Letter</a> </li>
                        </ul>
                    </li>
                    <li class="treeview"><a href="../workerModule/rankCity.html">Ranking of Cities </a></li>
                    <li class="treeview"><a href="../workerModule/marketTrends.html">Job Market Trends </a></li>
                </ul>
                </li>

                <li><a href="profile.html"><i class="fa fa-user"></i> <span>Profile</span></a></li>
            </ul>
            <!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
    </aside>
    <!-- Content Wrapper. Contains page content -->
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
            <!-- Your Page Content Here -->
            <!-- Small boxes (Stat box) -->

        </section>
    </div>
</div>

    <!-- /.content-wrapper -->
<?php include_once "Shared/footer.php"; ?>