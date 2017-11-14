<?php

$title = "Country";
$selectedOption = "Admin,Country";

require_once "../Private/functions.php";

include_once "../Shared/header.php";

include_once "../Shared/left-navigation.php";
?>

<div class="wrapper">
    <!-- Main Header -->
    <header class="main-header">
        <!-- Logo -->
        <a href="index2.html" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><img src="../../dist/img/logo.jpg" alt="logo"/></span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><img src="../../dist/img/logo.jpg" alt="logo"/>Integra Wave</span>
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
                                    <small>Active since July 2016</small>
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
                <li class="active"><a href="../index.html"><i class="fa fa-dashboard"></i> <span>Home</span></a></li>
                <li class="treeview">
                    <a href="../index.html"><i class="fa fa-graduation-cap"></i> <span>Student</span>
                        <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="treeview"><a href="../StudentModule/category.html">Courses</a>
                            <ul class="treeview-menu">
                                <li><a href="../StudentModule/category.html">ASP</a></li>
                                <li><a href="../StudentModule/category.html">PHP</a></li>
                            </ul>
                        </li>
                        <li class="treeview"><a href="../StudentModule/category.html">Important Dates</a>
                            <ul class="treeview-menu">
                                <li><a href="../StudentModule/dates.html">Schedule</a></li>
                                <li><a href="../StudentModule/dates.html">Fees Deadlines</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="treeview active">
                    <a href="../index.html"><i class="fa fa-briefcase"></i> <span>Workers</span>
                        <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
                </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="treeview"><a href="resume.html"> <span>Resume</span> <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
                </span></a>
                            <ul class="treeview-menu">
                                <li><a href="resume-template.php">Templates</a> </li>
                                <li><a href="resume-edit.php">Customize Resume</a> </li>
                            </ul>
                        </li>
                        <li class="treeview active"><a href="resume.html"> <span>Cover Letter</span> <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
                </span> </a>
                            <ul class="treeview-menu">
                                <li><a href="cover-letter-template.php">Templates</a> </li>
                                <li class="active"><a href="resume-edit.php">Customize Cover Letter</a> </li>
                            </ul>
                        </li>
                        <li class="treeview"><a href="ranking-of-cities.php">Ranking of Cities </a></li>
                        <li class="treeview"><a href="market-trends.php">Job Market Trends </a></li>
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
                Cover Letter Wizard
                <small>Customize your Cover letter</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="cover-letter-print.php">
                    <button class="btn btn-primary pull-right" type="submit">Print Cover Letter</button></a> </li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <!-- Your Page Content Here -->

            <!-- left column -->
            <div class="col-sm-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Personal Information </h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form class="form-horizontal">
                        <div class="box-body">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Name </label>
                                <div class="col-sm-9">
                                    <input type="text" value="Jane" class="form-control" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="text" value="Jane@email.com" class="form-control" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Address</label>
                                <div class="col-sm-9">
                                    <input type="text" value="67, bumblebee street" class="form-control" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">City</label>
                                <div class="col-sm-9">
                                    <input type="text" value="Guelph" class="form-control" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Pin-Code</label>
                                <div class="col-sm-9">
                                    <input type="text" value="6L6 L6L" class="form-control" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Province</label>
                                <div class="col-sm-9">
                                    <select class="form-control">
                                        <option>Ontario</option>
                                        <option>Alberta</option>
                                        <option>New Brunswick</option>
                                        <option>Manitoba</option>
                                        <option>Prince Edward Island</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Job Category</label>
                                <div class="col-sm-9">
                                    <input type="text" value="Full Stack Developer" class="form-control" disabled>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <button class="btn btn-primary pull-right" type="submit">Save Changes</button>
                        </div>
                        <!-- /.box-footer -->
                    </form>
                </div>
                <!-- /.box -->
            </div>
            <!--/.col (left) -->
            <!-- 2nd column-->
            <div class="col-sm-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Summary </h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form class="form-horizontal">
                        <div class="box-body">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Summary</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" rows="10" placeholder="Click here to edit ..."></textarea>
                                </div>
                            </div>

                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <button class="btn btn-primary pull-right" type="submit">Save Changes</button>
                        </div>
                        <!-- /.box-footer -->
                    </form>
                </div>
                <!-- /.box -->
            </div>
            <!-- /.2nd column-->
            <!-- 3rd column-->
            <div class="col-sm-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Education </h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form class="form-horizontal">
                        <div class="box-body">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Education</label>
                                <div class="col-sm-9">
                                 <textarea class="form-control small-textarea" rows="5" cols="10" >
                                    Post Graduation
                                    Humber college
                                    Graduating : October 2017
                                 </textarea>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <button class="btn btn-primary pull-right" type="submit">Edit</button>
                                            <button type="button"  data-toggle="modal" data-target="#delete-device" class="btn btn-primary pull-right margin-r-5">Delete</button>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <div class="box box-solid">
                                <div class="box-header with-border">
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <div class="box-group" id="accordion">
                                        <div class="panel box box-primary">
                                            <div class="box-header with-border">
                                                <h4 class="box-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                                        <button class="btn btn-primary" type="submit">Add Education</button>
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseOne" class="panel-collapse collapse">
                                                <div class="box-body">
                                                    <form class="form-horizontal">
                                                        <div class="box-body">
                                                            <div class="form-group">

                                                                <div class="col-sm-9">
                                                                    <input type="text" placeholder="High School, Degree and Major" class="form-control" disabled>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="col-sm-9">
                                                                    <input type="text" placeholder="School" class="form-control" disabled>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="col-sm-9">
                                                                    <select class="form-control">
                                                                        <option>Graduated</option>
                                                                        <option>Graduating</option>
                                                                        <option>Enrolled</option>
                                                                        <option>Deferred</option>
                                                                        <option>Transferred</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="col-sm-9">
                                                                    <input type="text" placeholder="Location" class="form-control" disabled>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="col-sm-9">
                                                                    <input type="text" placeholder="Completion Date" class="form-control" disabled>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- /.box-body -->
                                                        <div class="box-footer">
                                                            <button class="btn btn-primary pull-right" type="submit">Add</button>
                                                        </div>
                                                        <!-- /.box-footer -->
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- /.box-footer -->
                    </form>
                </div>
                <!-- /.box -->
            </div>
            <!-- /.3rd column-->

            <!-- 4th column-->
            <div class="col-sm-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Employment History </h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form class="form-horizontal">
                        <div class="box-body">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Employment History</label>
                                <div class="col-sm-9">
                                 <textarea class="form-control small-textarea" rows="5" cols="10" >
                                    Full Stack Developer
                                    HackersYou
                                    Graduating : October 2017
                                 </textarea>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <button class="btn btn-primary pull-right" type="submit">Edit</button>
                                            <button type="button"  data-toggle="modal" data-target="#delete-device" class="btn btn-primary pull-right margin-r-5">Delete</button>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <div class="box box-solid">
                                <div class="box-header with-border">
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <div class="box-group" id="accordion1">
                                        <div class="panel box box-primary">
                                            <div class="box-header with-border">
                                                <h4 class="box-title">
                                                    <a data-toggle="collapse" data-parent="#accordion1" href="#collapseOne1">
                                                        <button class="btn btn-primary" type="submit">Add Employment</button>
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseOne1" class="panel-collapse collapse">
                                                <div class="box-body">
                                                    <form class="form-horizontal">
                                                        <div class="box-body">
                                                            <div class="form-group">
                                                                <label class="col-sm-3 control-label">Name </label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" value="Jane" class="form-control" disabled>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-3 control-label">Email</label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" value="Jane@email.com" class="form-control" disabled>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-3 control-label">Province</label>
                                                                <div class="col-sm-9">
                                                                    <select class="form-control">
                                                                        <option>Ontario</option>
                                                                        <option>Alberta</option>
                                                                        <option>New Brunswick</option>
                                                                        <option>Manitoba</option>
                                                                        <option>Prince Edward Island</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-3 control-label">Job Category</label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" value="Full Stack Developer" class="form-control" disabled>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- /.box-body -->
                                                        <div class="box-footer">
                                                            <button class="btn btn-primary pull-right" type="submit">Add</button>
                                                        </div>
                                                        <!-- /.box-footer -->
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- /.box-footer -->
                    </form>
                </div>
                <!-- /.box -->
            </div>
            <!-- /.4th column-->

        </section>
    </div>

    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<!-- Main Footer -->
<?php include_once "../Shared/footer.php"; ?>
