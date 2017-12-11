<?php
    require_once "../Private/initialize.php";

    $selectedOptionArr = explode(',', $selectedOption);
?>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <!-- Optionally, you can add icons to the links -->
            <li <?php echo isset($selectedOptionArr) && $selectedOptionArr[0] == 'Home' ? "class='active'" : '' ?> >
                <a href="<?php echo url_for('/dashboard.php'); ?>"><i class="fa fa-dashboard"></i> <span>Home</span></a>
            </li>
            <?php

            if(isset($_SESSION['email'])){
                if($_SESSION['role'] == '1'){
                    include_once "left_nav_admin.php";
                }
            }

            ?>

            <li class="treeview <?php echo isset($selectedOptionArr) && $selectedOptionArr[0] == 'CRS' ? 'active' : '' ?> ">
                <a href="../home/dashboard.php"><i class="fa fa-graduation-cap"></i> <span>CRS</span>
                    <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                </a>
                <ul class="treeview-menu">
                    <li class="treeview"><a href="<?php echo url_for('/crs-module/initializeCandidate.php'); ?>">Calculator</a>
                    </li>

                </ul>
            </li>
            <li class="treeview <?php echo isset($selectedOptionArr) && $selectedOptionArr[0] == 'Student' ? 'active' : '' ?> ">
                <a href="<?php echo url_for('/index.html'); ?>"><i class="fa fa-graduation-cap"></i> <span>Student</span>
                    <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                </a>
                <ul class="treeview-menu">
                    <li class="treeview"><a href="<?php echo url_for('/student-module/student.php'); ?>">Add new..</a>
                                   </li>
                                 <li class="treeview"><a href="<?php echo url_for('/student-module/courses.php'); ?>">Courses & Grades</a>
                    <li class="treeview"><a href="<?php echo url_for('/student-module/category.php'); ?>">Important Dates</a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo url_for('/student-module/dates.php'); ?>">Schedule</a></li>
                            <li><a href="<?php echo url_for('/student-module/dates.php'); ?>">Fees Deadlines</a></li>
                        </ul>
                    </li>
                    <li class="treeview"><a href="<?php echo url_for('/student-module/contacts.php'); ?>">Contacts</a>
                                           </li>
                </ul>
            </li>
            <li class="treeview <?php echo isset($selectedOptionArr) && $selectedOptionArr[0] == 'Workers' ? 'active' : '' ?> ">
                <a href="<?php echo url_for('/index.html'); ?>"><i class="fa fa-briefcase"></i> <span>Workers</span>
                    <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
                </span>
                </a>
                <ul class="treeview-menu">
                    <li class="treeview"><a href="#"> <span>Resume</span> <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
                </span></a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo url_for('/worker-module/resume-template.php'); ?>">Templates</a> </li>
                            <li><a href="<?php echo url_for('/worker-module/resume-edit.php'); ?>">Customize Resume</a> </li>
                        </ul>
                    </li>
                    <li class="treeview active"><a href="#"> <span>Cover Letter</span> <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
                </span> </a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo url_for('/worker-module/cover-letter-template.php'); ?>">Templates</a> </li>
                            <li class="active"><a href="<?php echo url_for('/worker-module/resume-edit.php'); ?>">
                                    Customize Cover Letter</a> </li>
                        </ul>
                    </li>
                    <li class="treeview"><a href="<?php echo url_for('/worker-module/ranking-of-cities.php'); ?>">
                            Ranking of Cities </a></li>
                    <li class="treeview"><a href="<?php echo url_for('/worker-module/market-trends.php'); ?>">
                            Job Market Trends </a></li>
                </ul>
            </li>
            <li <?php echo isset($selectedOptionArr) && $selectedOptionArr[0] == 'Profile' ? "class='active'" : '' ?> >
                <a href="<?php echo url_for('/profile.html'); ?>">
                    <i class="fa fa-user"></i> <span>Profile</span></a>
            </li>
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>