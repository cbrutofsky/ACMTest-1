<?php require '../libs/functions.php';
/**
 * Created by PhpStorm.
 * User: David McFall
 * Date: 4/29/2017
 * Time: 11:51 PM
 */

require("../libs/config.php");
$pageDetails = "manage_users";

include('../libs/setup.php');

# Redirect if not logged in
redirectIfNotLoggedIn();

# Page Setup:
include('template/header.php');
include('template/sidebar.php');
?>

    <main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
        <h1 class="page-header">Current Users</h1>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Last Name</th>
                    <th>First Name</th>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Verified?</th>
                    <th>ACM Level</th>
                    <th>Permission Group</th>
                </tr>
                </thead>
                <tbody>
                <?php
                global $DB;
                $q = $DB->query('SELECT * FROM users');
                while ($r = $q->fetch()) {
                    echo "<tr>";
                    echo "<td>";
                    echo $r['id'];
                    echo "</td>";
                    echo "<td>";
                    echo $r['last_name'];
                    echo "</td>";
                    echo "<td>";
                    echo $r['first_name'];
                    echo "</td>";
                    echo "<td>";
                    echo $r['email'];
                    echo "</td>";
                    echo "<td>";
                    echo $r['username'];
                    echo "</td>";
                    echo "<td>";
                    if ($r['email_verification'] == 1) {
                        echo "Yes";
                    } else {
                        echo "No";
                    }
                    echo "</td>";
                    echo "<td>";
                    echo $r['acm_group'];
                    echo "</td>";
                    echo "<td>";
                    echo $r['permissions'];
                    echo "</td>";
                    echo "</tr>";
                }
                ?>
                </tbody>
            </table>
        </div>
    </main>


<?php include(D_TEMPLATE . '/footer.php'); ?>