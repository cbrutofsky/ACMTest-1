<?php
/**
 * Created by PhpStorm.
 * User: davidmcfall
 * Date: 6/22/17
 * Time: 5:30 PM
 */
?>

<!DOCTYPE HTML>
<HTML>
<head>
    <title><?php echo($page['title']); ?> - ACM</title>
    <link rel="icon" href="http://artoo.kennesaw.edu/_resources/images/favicon.ico" type="text/png"/>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content=""/>

    <!-- Bootstrap -->
    <link href="../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="../node_modules/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <link href="../css/default.css" rel="stylesheet">
</head>
<body>
<!-- Add Code below here -->

<div class="navbar-wrapper">
    <div class="container">

        <nav class="navbar navbar-inverse navbar-default" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                            aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/">Kennesaw ACM</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <?php
                        global $DB;
                        $q = $DB->query('SELECT * FROM pages');
                        while ($r = $q->fetch()) { ?>
                            <li<?php if ($page['id'] == $r['id']) {
                                echo ' class="active"';
                            } ?> ><a href="?page=<?php echo $r['id']; ?>"><?php echo $r['title']; ?></a></li>
                        <?php } ?>
                    </ul>
                    <ul class="nav navbar-nav pull-right">
                        <li>
                            <buton id="btn-debug" class="btn btn-default"><i class="fa fa-bug"></i></buton>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-haspopup="true" aria-expanded="false">Name, Here<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="../dashboard/login.php">Admin Login</a></li>
                                <li><a href="../dashboard/index.php">Dashboard</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li role="separator" class="divider"></li>
                                <li class="dropdown-header">Nav header</li>
                                <li><a href="#">Separated link</a></li>
                                <li><a href="#">One more separated link</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </div>
</div>
