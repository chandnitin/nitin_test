<?php
 include_once('config.php');
 include_once('constant.php');
 $sql = "UPDATE users SET is_deleted ='1' WHERE id =  ".$_GET['id']; 
if ($conn->query($sql) === TRUE) {
	 echo"<script>alert('Account deactived Successfully..')</script>";
     echo "<script>window.location.href = ".$BASE_URL."'index.php';</script>";
}else{
	echo"<script>alert('Something went worng..!')</script>";
    echo "<script>window.location.href = ".$BASE_URL."'index.php';</script>";
}

 ?>