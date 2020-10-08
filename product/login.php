<?php
require('header.php');
require_once '../vendor/autoload.php';
 
// init configuration
$clientID = '61411318107-n48rdrq0ta9g0dgpr779ee1gvbt8j4ge.apps.googleusercontent.com';
$clientSecret = 'ujPPhoz__scERj1nqi8194Ao>';
$redirectUri = 'http://localhost:8080/MarketingOJO/product/index.php';
  
// create Client Request to access Google API
$client = new Google_Client();
$client->setClientId($clientID);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectUri);
$client->addScope("email");
$client->addScope("profile");
 
// authenticate code from Google OAuth Flow
if (isset($_GET['code'])) {
  $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
  $client->setAccessToken($token['access_token']);
  
  // get profile info
  $google_oauth = new Google_Service_Oauth2($client);
  $google_account_info = $google_oauth->userinfo->get();
  $email =  $google_account_info->email;
  $name =  $google_account_info->name;
 $_SESSION['username'] = $name;
  // now you can use this profile info to create account in your website and make user logged in.

?>

  <!-- breadcrumb-section start -->
    <div class="breadcrumb-section mb-30 d-none d-md-block">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb bg-transparent">
                            <li class="breadcrumb-item"><a href="index.html" class="text-uppercase">Home</a></li>
                            <li class="breadcrumb-item active"><a href="login.html" class="text-uppercase">login</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-section end -->
    <!-- my-account start -->
    <div class="my-account pt-4">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="title"> Log in to your account</h3>
                       <div class="social">
                                  <div class="panel panel-default">
                                    <?php include('error.php'); ?>
  
   </div>
                          
                                </div>
                    <form class="log-in-form" method="post" action="login.php">
                       <?php
  }  else {
  echo "<a href='".$client->createAuthUrl()."'>Google Login</a>";
}
   ?>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-md-3 col-form-label">Email</label>
                            <div class="col-md-6">
                                <input type="email" name="email" class="form-control" id="staticEmail">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-md-3 col-form-label">Password</label>
                            <div class="col-md-6">
                                <div class="input-group mb-2 mr-sm-2">
                                    <input type="password" name="password" class="form-control" id="inputPassword">
                                    <div class="input-group-prepend">
                                        <button type="button" class="input-group-text show-password">show</button>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="form-group row text-center">
                            <div class="col-md-6 offset-md-3">
                                <div class="login-form-links">
                                    <a href="#" class="for-get">Forgot your password?</a>
                                    <div class="sign-btn">
                                        <button type="submit" class="btn-success mt-0" name="login_user">Log In</button>
                              
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mb-0 text-center">
                            <div class="col-12">
                                <div class="border-top">
                                    <a href="signup.php" class="no-account">No account? Create one here</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php
require('footer.php');
?>