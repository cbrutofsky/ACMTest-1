<?php
/**
 * Created by PhpStorm.
 * User: davidmcfall
 * Date: 6/22/17
 * Time: 5:59 PM
 */

require("libs/config.php");
$pageDetails = "INDEX-TEMP";

include('libs/setup.php');

include(D_TEMPLATE . '/header.php');
?>

<?php

if ($page['id'] == 1) {
    //echo $page['body_formatted'];

    include(D_TEMPLATE . '/home_page.php');

} else { ?>
    <div id="banner" class="baseHeader">
        <h1 class="page_title"><?php echo $page['header']; ?></h1>
        <img src="<?php echo $page['banner_image']; ?>" alt="">
    </div>

    <div class="container">
        <?php echo $page['body']; ?>
    </div>

<?php }
?>



<?php
include(D_TEMPLATE . '/footer.php');
?>

<?php include('widgets/debug.php'); ?>
