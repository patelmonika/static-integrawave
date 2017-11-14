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
                <a href="<?php echo url_for('/index.php'); ?>"><i class="fa fa-dashboard"></i> <span>Home</span></a>
            </li>
            <li class="treeview <?php echo isset($selectedOptionArr) && $selectedOptionArr[0] == 'Admin' ? 'active' : '' ?> ">
                <a href="../index.html"><i class="fa fa-graduation-cap"></i> <span>Admin</span>
                    <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                </a>
                <ul class="treeview-menu">
                    <li class="treeview"><a href="<?php echo url_for('/admin-module/country.php'); ?>">Country</a>

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
                    <li class="treeview"><a href="<?php echo url_for('/StudentModule/category.html'); ?>">Courses</a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo url_for('/StudentModule/category.html'); ?>">ASP</a></li>
                            <li><a href="<?php echo url_for('/StudentModule/category.html'); ?>">PHP</a></li>
                        </ul>
                    </li>
                    <li class="treeview"><a href="<?php echo url_for('/StudentModule/category.html'); ?>">Important Dates</a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo url_for('/StudentModule/dates.html'); ?>">Schedule</a></li>
                            <li><a href="<?php echo url_for('/StudentModule/dates.html'); ?>">Fees Deadlines</a></li>
                        </ul>
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
                            <li><a href="<?php echo url_for('/workerModule/resumeTemplate.html'); ?>">Templates</a> </li>
                            <li><a href="<?php echo url_for('/workerModule/editResume.html'); ?>">Customize Resume</a> </li>
                        </ul>
                    </li>
                    <li class="treeview active"><a href="#"> <span>Cover Letter</span> <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
                </span> </a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo url_for('/workerModule/cvTemplate.html'); ?>">Templates</a> </li>
                            <li class="active"><a href="<?php echo url_for('/workerModule/editResume.html'); ?>">
                                    Customize Cover Letter</a> </li>
                        </ul>
                    </li>
                    <li class="treeview"><a href="<?php echo url_for('/workerModule/rankCity.html'); ?>">
                            Ranking of Cities </a></li>
                    <li class="treeview"><a href="<?php echo url_for('/workerModule/marketTrends.html'); ?>">
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