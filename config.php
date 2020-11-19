<?php
error_reporting(0);
include_once('constant.php');
$servername ="45.87.80.103";
$username = "u904913351_test_nitin";
$password = "Java@123";
$dbname = "u904913351_test_nitin";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    echo"<script>alert('Connection Failed.!')</script>";
    echo "<script>window.location.href = '".$BASE_URL."'index.php'</script>";
}



?>