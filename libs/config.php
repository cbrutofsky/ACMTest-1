<?php
/**
 * Created by PhpStorm.
 * User: davidmcfall
 * Date: 6/22/17
 * Time: 6:02 PM
 */

//display all error except depreciated and notice
error_reporting( E_ALL & ~E_DEPRECATED & ~E_NOTICE);
// turn on output buffering
ob_start();

/*
if you make login section for admin
use session here otherwise no need
session_start();
*/

require_once("constants.php");
require_once("common_functions.php");

/*
 * turn off magic-quotes support, for runtime e, as it will cause problems if enabled
 */
if(version_compare(PHP_VERSION,5.3,'<') && function_exists('set_magic_quotes_runtime')) set_magic_quotes_runtime(0);

// set currentPage in the local scope
$currentPage = pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME);




?>