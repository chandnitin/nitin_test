<?php

 include_once('constant.php');
  
 require_once 'vendor/autoload.php';
 include_once('config.php');

    session_start();

$fb = new Facebook\Facebook([
 'app_id' => '170992148022655',
 'app_secret' => 'ecee3700c2763a90272990526ce70436',
 'default_graph_version' => 'v2.5',
]);
$helper = $fb->getRedirectLoginHelper();
$permissions = ['email']; // optional
try {
if (isset($_SESSION['facebook_access_token'])) {
$accessToken = $_SESSION['facebook_access_token'];
} else {
  $accessToken = $helper->getAccessToken();
}
} catch(Facebook\Exceptions\facebookResponseException $e) {
// When Graph returns an error
echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
// When validation fails or other local issues
echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}
if (isset($accessToken)) {
if (isset($_SESSION['facebook_access_token'])) {
$fb->setDefaultAccessToken($_SESSION['facebook_access_token']);
} else {
// getting short-lived access token
$_SESSION['facebook_access_token'] = (string) $accessToken;
  // OAuth 2.0 client handler
$oAuth2Client = $fb->getOAuth2Client();
// Exchanges a short-lived access token for a long-lived one
$longLivedAccessToken = $oAuth2Client->getLongLivedAccessToken($_SESSION['facebook_access_token']);
$_SESSION['facebook_access_token'] = (string) $longLivedAccessToken;
// setting default access token to be used in script
$fb->setDefaultAccessToken($_SESSION['facebook_access_token']);
}
// redirect the user to the profile page if it has "code" GET variable
if (isset($_GET['code'])) {
header('Location: dashboard.php');
}
// getting basic info about user
try {
$profile_request = $fb->get('/me?fields=name,first_name,last_name,email');
$requestPicture = $fb->get('/me/picture?redirect=false&height=200'); //getting user picture
$picture = $requestPicture->getGraphUser();
$profile = $profile_request->getGraphUser();
$fbid = $profile->getProperty('id');           // To Get Facebook ID
$fbfullname = $profile->getProperty('name');   // To Get Facebook full name
$fbemail = $profile->getProperty('email');    //  To Get Facebook email
$fbpic = "<img src='".$picture['url']."' class='img-rounded'/>";
# save the user nformation in session variable
$_SESSION['user_id'] = $fbid;
$_SESSION['name']   = $fbfullname;
$_SESSION['email'] = $fbemail;
$_SESSION['fb_pic'] = $fbpic;
 $_SESSION['photo'] =$fbpic;

   $insSql= "INSERT INTO users(name,email,photo) VALUES ('".$fbfullname."','".$fbemail."','".$fbpic."')";
   $conn->query($insSql);

} catch(Facebook\Exceptions\FacebookResponseException $e) {
// When Graph returns an error
echo 'Graph returned an error: ' . $e->getMessage();
session_destroy();
// redirecting user back to app login page
header("Location: ./");
exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
// When validation fails or other local issues
echo 'Facebook SDK returned an error: ' . $e->getMessage();
exit;
}
} else {
// replace your website URL same as added in the developers.Facebook.com/apps e.g. if you used http instead of https and you used            
$loginUrl = $helper->getLoginUrl('https://nitin-test.herokuapp.com/', $permissions);
//echo '<a href="' . $loginUrl . '">Log in with Facebook!</a>';
}

?>
<html>
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
        <a href="registration.php">New Registration</a>
        <button type="submit" class="btn btn-primary">Login</button>
        
        <a href="<?php echo $loginUrl ?>"  class="btn facebook">Facebook</a>

    </form>
    </div>

</div></div></div>


</body>
</html>

