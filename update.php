<?php 

 include_once('config.php');
    include_once('Upload.php');
    $upfile     = new Upload();
    $name       = $_POST['name'];
    $email      = $_POST['email'];
    $phone      = $_POST['phone'];
    $country    = $_POST['country'];
    $state      = $_POST['state'];
    $city       = $_POST['city'];
    $pincode    = $_POST['pin_code'];
    $password    = $_POST['password'];
    $hash = md5($password);
   
    if(!empty($_FILES['photo']['name'])){
    	$uploadResult = $upfile->upload($_FILES);
	 	$photo  = $_FILES['photo']['name'];
		$_POST['photo'] =$photo;
	}
   
	 $set = array();
        foreach ($_POST as $field => $value) {
        	if($field !='id' && !empty($value) ){
            	$set[] = "$field='{$value}'";
        	}
        }
        $set = implode(', ', $set);
        $sql = "UPDATE users SET {$set} WHERE id =  ".$_POST['id']; 


      
        if ($conn->query($sql) === TRUE) {
              echo"<script>alert('Successfully updated.')</script>";
    			echo "<script>window.location.href = 'http://localhost/nitin_test/profile.php';</script>";
          } else {
             echo"<script>alert('Something went wrong')</script>";
    			echo "<script>window.location.href = 'http://localhost/nitin_test/profile.php';</script>";
          }
   



?>