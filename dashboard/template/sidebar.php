<?php
/**
 * Created by PhpStorm.
 * User: David McFall
 * Date: 7/14/2017
 * Time: 11:42 PM
 */
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
            <ul class="nav nav-sidebar">
                <li<?php if ($pageDetails == 'index') {
                    echo ' class="active"';
                } ?>><a href="/dashboard/index.php">Overview <span class="sr-only">(current)</span></a></li>
                <li><a href="#">Reports</a></li>
                <li><a href="#">Analytics</a></li>
                <li><a href="#">Export</a></li>
            </ul>
            <ul class="nav nav-sidebar">
                <?php
                if ($pageDetails == 'manage_pages') {
                    echo "<li class='active'>";
                    echo "<a href='/dashboard/manage_pages.php'>Manage Pages</a>";
                    echo "<ul class='nav nav-second-level'>";
                    echo "<li><a href='#'>Page List</a></li>";
                    echo "<li><a href='#'>Modify Page</a></li>";
                    echo "<li><a href='#'>Add Page</a></li>";
                    echo "<li><a href='#'>Remove Page</a></li>";
                    echo "</ul>";
                    echo "</li>";
                } else {
                    echo "<li><a href='/dashboard/manage_pages.php'>Manage Pages</a></li>";
                }
                ?>
                <?php
                if ($pageDetails == 'manage_users') {
                    echo "<li class='active'>";
                    echo "<a href='/dashboard/manage_users.php'>Manage Users</a>";
                    echo "<ul class='nav nav-second-level'>";
                    echo "<li><a href='#'>User List</a></li>";
                    echo "<li><a href='#'>User Search</a></li>";
                    echo "<li><a href='#'>Add User</a></li>";
                    echo "<li><a href='#'>Modify User</a></li>";
                    echo "</ul>";
                    echo "</li>";
                } else {
                    echo "<li><a href='/dashboard/manage_users.php'>Manage Users</a></li>";
                }
                ?>
                <li><a href="#">Manage Events</a></li>
                <li><a href="#">Manage News</a></li>
                <li><a href="#">Manage Activities</a></li>
                <li><a href="#">Manage Resources</a></li>
                <li><a href="#">Manage Forum</a></li>
            </ul>
            <ul class="nav nav-sidebar">
                <li><a href="">Site Settings</a></li>
                <li><a href="">Backup</a></li>
                <li><a href="">View Site</a></li>
            </ul>
        </div>
