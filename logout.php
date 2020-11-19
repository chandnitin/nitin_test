<?php
session_start();
session_destroy();
include_once('constant.php');
echo "<script>window.location.href = ".$BASE_URL."'index.php';</script>";
?>