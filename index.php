<html  xmlns:fb = "http://www.facebook.com/2008/fbml">
  <head>

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link href="css/main.css" rel="stylesheet" id="bootstrap-css">

  </head>
<body id="LoginForm">
<div class="container">

<div class="login-form">
<div class="main-div">
    <div class="panel">
   <h2> Login</h2>
   <p>Please enter your email and password</p>
   </div>
    <form id="Login" method="post" action="auth.php">

        <div class="form-group">


            <input type="email" class="form-control" id="email" name="email" placeholder="Email Address">

        </div>

        <div class="form-group">

            <input type="password" class="form-control" id="password" placeholder="Password" name="password" >

        </div>
        
        <button type="submit" class="btn btn-primary">Login</button>
        
        <a href="fbconfig.php" type="submit" class="btn facebook">Facebook</a>

    </form>
    </div>

</div></div></div>


</body>
</html>
