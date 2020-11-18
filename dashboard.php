<?php session_start();
include_once('header.php');
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
   <link href="css/main.css" rel="stylesheet" id="bootstrap-css">
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
<div class="container">
  <h3 class="text-center">Wel Come</h3>

</div>

</body>
</html>
