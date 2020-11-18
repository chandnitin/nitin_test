<?php
error_reporting(0);
 include_once('constant.php');
$servername ="localhost";
$username = "root";
$password = "";
$dbname = "test_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    echo"<script>alert('Connection Failed.!')</script>";
    echo "<script>window.location.href = '".$BASE_URL."'index.php'</script>";
}



?>