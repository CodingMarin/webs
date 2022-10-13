<?php
require_once 'vendor/autoload.php';

$files_exist = 'app/home.php';

if (file_exists($files_exist)) {

    require(dirname( __FILE__ ) . '/app/home.php');

} else {
    include 'app/404/error.php';
}

$url_base = "";

$meta = "";

$description = "";
?>