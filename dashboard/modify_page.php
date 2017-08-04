<?php
/**
 * Created by PhpStorm.
 * User: David
 * Date: 8/3/2017
 * Time: 8:51 PM
 */

require("../libs/config.php");
$pageDetails = "manage_pages";

include('../libs/setup.php');

# Redirect if not logged in
redirectIfNotLoggedIn();

# Page Setup:
include('template/header.php');
include('template/sidebar.php');
?>

<main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
    <h1 class="page_title">Modify Page</h1>

    <h6>Please select a page: </h6>

    <div class="input-group-btn select" id="select1">
        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            <span class="selected">Select page</span><span class="caret pull-right"></span>
        </button>
        <ul class="dropdown-menu option" role="menu">
            <li id="1"><a class="dropdown-item" href="#">Home Page</a></li>
            <li id="2"><a class="dropdown-item" href="#">Events Page</a></li>
            <li id="3"><a class="dropdown-item" href="#">News Page</a></li>
            <li id="4"><a class="dropdown-item" href="#">ICPC Page</a></li>
            <li id="5"><a class="dropdown-item" href="#">Resources Page</a></li>
            <li id="6"><a class="dropdown-item" href="#">Forum Page</a></li>
            <li id="7"><a class="dropdown-item" href="#">About Page</a></li>
            <li id="8"><a class="dropdown-item" href="#">Join Us Page</a></li>
        </ul>
    </div>

</main>

<link rel="stylesheet" href="/css/dashboard-modify-page.css">

<?php include(D_TEMPLATE . '/footer.php'); ?>

<script>
    $('body').on('click', '.option li', function () {
        var i = $(this).parents('.select').attr('id');
        var v = $(this).children().text();
        var o = $(this).attr('id');
        $('#' + i + ' .selected').attr('id', o);
        $('#' + i + ' .selected').text(v);
    });
</script>
