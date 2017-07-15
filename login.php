<?php
/**
 * Created by PhpStorm.
 * User: David
 * Date: 7/14/2017
 * Time: 4:55 PM
 */

require("libs/config.php");
$pageDetails = "INDEX-TEMP";

# Session Start
session_start();

# General Page setup
include('libs/setup.php');

# Add login function
include('libs/login.php');

include(D_TEMPLATE . '/header.php');
?>

    <div id="banner" class="baseHeader">
        <h1 class="page_title"><?php echo $page['header']; ?></h1>
        <img src="<?php echo $page['banner_image']; ?>" alt="">
    </div>

    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Login</h3>
            </div>
            <div class="panel-body">
                <?php
                if ($_POST) {
                    echo $_POST['inputEmail'];
                    echo '<br>';
                    echo $_POST['inputPassword'];
                }
                //echo getOptimalBcryptCostParameter();
                ?>

                <form class="form-signin" action="login.php" method="post" role="form">
                    <h2 class="form-signin-heading">Please sign in</h2>
                    <label for="inputEmail" class="sr-only">Email address</label>
                    <input type="email" id="inputEmail" class="form-control" name="inputEmail"
                           placeholder="Email address / Username" required autofocus>
                    <label for="inputPassword" class="sr-only">Password</label>
                    <input type="password" id="inputPassword" class="form-control" name="inputPassword"
                           placeholder="Password" required>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="remember-me"> Remember me
                        </label>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                </form>
            </div>
        </div>
    </div>

<?php
include("template/footer.php");
?>