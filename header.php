<?php
error_reporting(0);
session_start();
include_once('constant.php');

if(empty($_SESSION['name'])){
    echo "<script>window.location.href = ".$BASE_URL."'index.php';</script>";

}

?>