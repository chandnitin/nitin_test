<?php
error_reporting(0);
session_start();
include_once('constant.php');
if(empty($_SESSION)){
    echo "<script>window.location.href = 'http://localhost/nitin_test/index.php';</script>";
}

?>