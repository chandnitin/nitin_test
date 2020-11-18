<?php
include_once('config.php');
session_start();
$email  = $_POST['email'];
$passwd = $_POST['password']; 
$hash   = md5($passwd);  
 $sql    = "SELECT id, email,name,photo  FROM users WHERE email = '".$email."' AND password='".$hash."'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $_SESSION['user_id']  = $row["id"];
    $_SESSION['email']    = $row["email"];
    $_SESSION['name']     = $row["name"];
    $_SESSION['photo']     = $row["photo"];
    echo"<script>alert('Login Successfully..')</script>";
    echo "<script>window.location.href = 'http://localhost/nitin_test/dashboard.php';</script>";
  }
} else {
    echo"<script>alert('Authentication Failed try again..!')</script>";
    echo "<script>window.location.href = 'http://localhost/nitin_test/index.php';</script>";
}


?>