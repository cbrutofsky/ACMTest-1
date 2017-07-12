<?php
/**
 * Created by PhpStorm.
 * User: David
 * Date: 7/11/2017
 * Time: 11:50 PM
 */

$site_title = SITE_NAME;

# Database Connection
global $DB;

# Constants

# Functions


# Page setup
if (isset($_GET['page'])) {
    $pageid = $_GET['page'];
} else {
    $pageid = 1;
}

$page = page_data($pageid);