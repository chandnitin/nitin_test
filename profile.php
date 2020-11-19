<?php

include_once('config.php');
include_once('header.php');
include_once('constant.php');
$sql    = "SELECT * FROM users WHERE email = '".$_SESSION['email']."' " ;
$result = $conn->query($sql);
$data = array();
if ($result->num_rows > 0) { 
  $data = $result->fetch_assoc();
  
}


?>


<?php

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>N</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 

<script src="js/main.js"></script>

</head>
<body>


<div id="app" >
    <nav class="navbar navbar-expand-md navbar-light bg-light">
        <a class="navbar-brand" href="#">N</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
               
            </ul>
            <ul class="navbar-nav">
            <li class="nav-item dropdown"  style="text-align:right">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" style="margin-right:10px;">
            <?php echo $_SESSION['name']; ?>
            </a>
            <div class="dropdown-menu" style="margin-right:10px;">
            <a class="dropdown-item" href="profile.php">Profile</a>
            <a class="dropdown-item" href="logout.php">Logout</a>
            
            </div>
            </li>
            </ul>
        </div>
    </nav>
</div>
<div class="container" style="margin-top:20px;">
<div class="row">
<div>   
    <img src="<?php echo BASE_URL. '/'.STORAGE.'/'.$_SESSION['photo'] ?>"  width="200px" height="200px" style="border: 1px solid  #ccc;  border-radius:5px;"/><br/>
    

</div>
    <div class="col-md-6 col-sm-12 col-lg-6 col-md-offset-3">
		<div class="panel ">
			
			<div class="panel-body">
				<form name="myform" action="update.php"  method="post" enctype="multipart/form-data">
                <input  name="id" class="form-control" type="hidden" value="<?php echo $data['id'] ?>">
					<div class="form-group">
						<label for="myName">Full Name *</label>
						<input id="myName" name="name" class="form-control" type="text" data-validation="required" value="<?php echo $data['name'] ?>">
						<span id="error_name" class="text-danger"></span>
					</div>
					<div class="form-group">
						<label for="email">Email *</label>
						<input id="email" name="email" class="form-control" type="text" data-validation="email" value="<?php echo $data['email'] ?>" readonly>
						<span id="error_email" class="text-danger"></span>
                    </div>
                   
                    <div class="form-group">
						<label for="phone">Phone Number *</label>
						<input type="text" id="phone" name="phone" class="form-control" value="<?php echo $data['phone'] ?>" >
						<span id="error_phone" class="text-danger" ></span>
					</div>
					<div class="form-group">
						<label for="country">Country *</label>
						<input id="country" name="country"  class="form-control" type="text"  value="<?php echo $data['country'] ?>">
						<span id="error_country" class="text-danger" ></span>
                    </div>
                    <div class="form-group">
						<label for="state">State *</label>
						<input id="state" name="state"  class="form-control" type="text" value="<?php echo $data['state'] ?>">
						<span id="error_state" class="text-danger" ></span>
                    </div>
                    <div class="form-group">
						<label for="city">City *</label>
						<input id="city" name="city"  class="form-control" type="text" value="<?php echo $data['city'] ?>" >
						<span id="error_city" class="text-danger" ></span>
					</div>
					<div class="form-group">
						<label for="pincode">Pin code *</label>
						<input id="pincode" name="pin_code"  class="form-control" type="text" value="<?php echo $data['pin_code'] ?>">
						<span id="error_pincode" class="text-danger"></span>
					</div>
					<div class="form-group">
                    <label for="photo">Photo*</label>
						<input id="photo" name="photo"  class="form-control" type="file" value="<?php echo $data['photo'] ?>" >
						<span id="error_photo" class="text-danger"></span>
					</div>
					
					<button id="submit" type="submit" value="submit" class="btn btn-primary center">Update</button>

					<button href="<?php echo BASE_URL?>/account.php?&id=<?php echo $data['id'] ?>" class="btn btn-danger center">Deactive</button>
			
				</form>

			</div>
		</div>
	</div>
</div>

</div>

</body>
</html>
