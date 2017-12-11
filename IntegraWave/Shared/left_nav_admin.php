<li class="treeview <?php echo isset($selectedOptionArr) && $selectedOptionArr[0] == 'Admin' ? 'active' : '' ?> ">
    <a href=<?php echo url_for('/dashboard.php'); ?>><i class="fa fa-graduation-cap"></i> <span>Admin</span>
        <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
    </a>
    <ul class="treeview-menu">
        <li class="treeview"><a href="<?php echo url_for('/admin-module/country.php'); ?>">Country</a>

        </li>
    </ul>
    <ul class="treeview-menu">
        <li class="treeview"><a href="<?php echo url_for('/admin-module/manageUser.php'); ?>">Manage User</a>

        </li>
    </ul>
</li>