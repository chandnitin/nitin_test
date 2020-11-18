<?php
include_once('config.php');
include_once('constant.php');
session_start();
$email  = $_POST['email'];
$passwd = $_POST['password']; 
$hash   = md5($passwd);  
 $sql    = "SELECT id, email,name,is_deleted  FROM users WHERE email = '".$email."' AND password='".$hash."'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
   $row = $result->fetch_assoc();
   if($row['is_deleted']!=1){
      $_SESSION['user_id']  = $row["id"];
      $_SESSION['email']    = $row["email"];
      $_SESSION['name']     = $row["name"];
      echo"<script>alert('Login Successfully..')</script>";
      echo "<script>window.location.href = ".$BASE_URL."'dashboard.php';</script>";
    }else{
       echo"<script>alert('Account dectivated please contact to support.')</script>";
        echo "<script>window.location.href = ".$BASE_URL."'index.php';</script>";
    }
   

} else {
    echo"<script>alert('Authentication Failed try again..!')</script>";
    echo "<script>window.location.href =".$BASE_URL."'index.php';</script>";
}


?>